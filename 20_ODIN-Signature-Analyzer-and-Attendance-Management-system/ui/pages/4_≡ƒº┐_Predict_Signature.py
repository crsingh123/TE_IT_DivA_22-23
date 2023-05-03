import os

from django.test import ignore_warnings
import numpy as np
from pymongo import MongoClient
import cv2
import streamlit as st
import pandas as pd
from PIL import Image, ImageDraw, ImageOps
import io
from sklearn.preprocessing import LabelEncoder
import tensorflow as tf
from tensorflow import keras
from tensorflow.keras.models import load_model
from tensorflow.keras.applications import VGG16, preprocess_input
import base64
from datetime import datetime
from Homepage import get_session_state, set_session_state
from streamlit_extras.switch_page_button import switch_page
import requests
from uuid import uuid4

# Connect to MongoDB
client = MongoClient("")
db = client.test
users = db.users
data = db.data

def add_bg_from_url():
    st.markdown(
         f"""
         <style>
         .css-6qob1r {{
             background-image: url("https://images.unsplash.com/photo-1524169358666-79f22534bc6e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3540&q=80");
             background-attachment: fixed;
             background-size: cover
         }}
         </style>
         """,
         unsafe_allow_html=True
     )

add_bg_from_url()

def add_mbg_from_url():
    st.markdown(
         f"""
         <style>
         .stApp {{
             background-image: url("https://images.unsplash.com/photo-1566410824233-a8011929225c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80");
             background-attachment: fixed;
             background-size: cover
         }}
         </style>
         """,
         unsafe_allow_html=True
     )

add_mbg_from_url()


def add_logo():
    owner = " "
    repo = "test_testing"
    path = "test_logo.png"
    ref = "main"
    url = f"  "
    headers = {
        "Authorization": ""
    }
    response = requests.get(url, headers=headers)
    response.raise_for_status()

    image_url = response.json()["download_url"]
    st.markdown(
        f"""
        <style>
            [data-testid="stSidebarNav"] {{
                background-image: url({image_url});
                background-repeat: no-repeat;
                padding-top: 80px;
                background-position: 20px 20px;
                background-size: 50%;
            }}
            [data-testid="stSidebarNav"]::before {{
                content: "ODIN";
                font-family: "Apple Chancery", Helvetica, Arial, sans-serif;
                padding-left: 40px;
                padding-top: 20px;
                margin-left: 20px;
                margin-top: 20px;
                font-size: 30px;
                position: relative;
                top: 90px;
            }}
        </style>
        """,
        unsafe_allow_html=True,
    )


def is_user_logged_in():
    return get_session_state().get("is_logged_in", False)

if not is_user_logged_in():
    add_logo()
    st.error("You need to log in to access this page.")
    st.stop()


# Load the saved VGG16 model
model = load_model('/Users/devanshu/Desktop/ML Projects/Hackathons/Kleos/Odin/src/pipe/generated_model/vgg16_model_v2.h5')

# Define a function to preprocess the signature image
def preprocess_image(image_path):
    img = Image.load_img(image_path, target_size=(224, 224))
    img_array = Image.img_to_array(img)
    img_array = np.expand_dims(img_array, axis=0)
    img_array = preprocess_input(img_array)
    return img_array

# Define a function to predict the signature owner
def predict_owner(signature_path):
    # Load and preprocess the signature image
    signature = preprocess_image(signature_path)
    # Make a prediction using the VGG16 model
    prediction = model.predict(signature)
    # Get the label with the highest probability
    label = label_encoder.inverse_transform([np.argmax(prediction)])[0]
    # Extract alphabetic characters from the label
    label = ''.join(filter(str.isalpha, label))
    # Check if the prediction is below a threshold
    if prediction.max() < 0.3:
        label = "Forgery"
    return label

# Define the label encoder
label_encoder = LabelEncoder()
label_encoder.classes_ = np.load('/Users/devanshu/Desktop/ML Projects/Hackathons/Kleos/Odin/src/pipe/generated_model/label_encoder_classes_v2.npy')

# Define the Streamlit app
st.title("Signature Predictor")
st.sidebar.title("Signature Predictor")


# Add a text input field for the subject
subject_name = st.text_input("Enter the Subject")

# Define the file uploader
files = st.file_uploader("Upload signature images", type=["jpg", "jpeg", "png"], accept_multiple_files=True)



# Create an empty list to store predictions
names = []

# Iterate over uploaded files
for file in files:
    # Save the uploaded file
    img = Image.open(file)
    img.save('uploaded_signature.png')

    # Display the uploaded signature
    st.image(img, caption='Uploaded Signature', use_column_width=True)

    # Make a prediction
    prediction = predict_owner('uploaded_signature.png')
    names.append(prediction)
    if prediction == "Forgery":
        st.write("This is a Forgery.")
    else:
        st.write(f"The signature belongs to {prediction}.")

# Create a DataFrame with the predicted names
df = pd.DataFrame({'Predicted Name': names})

# Rename the CSV file with the subject name and date
if subject_name != '':
    date = datetime.today().strftime('%Y-%m-%d')
    filename = f"{subject_name}_{date}.csv"

    def get_user_state():
        # Get the session state for the current session ID
        if "session_id" not in st.session_state:
            st.session_state.session_id = str(uuid4())
        if st.session_state.session_id not in st.session_state:
            st.session_state[st.session_state.session_id] = {}
        return st.session_state[st.session_state.session_id]

    def get_table_download_link(df, filename):
        # Exclude rows with predicted name "Forgery"
        df = df.loc[df['Predicted Name'] != 'Forgery']
        # Convert DataFrame to CSV file
        csv = df.to_csv(index=False)
        # Encode CSV file as base64
        b64 = base64.b64encode(csv.encode()).decode()
        # Generate download link
        href = f'<a href="data:file/csv;base64,{b64}" download="{filename}">Download CSV file</a>'
        return href



    # Add an export button for the predicted names
    csv_link = get_table_download_link(df, filename)
    st.markdown(csv_link, unsafe_allow_html=True)

    user = users.find_one({"username": get_user_state().get("username")})

    # Extract the username field from the user object
    username = user["username"]

    # Add the predicted names and the date to MongoDB
    for name in names:
        data.insert_one({"Name": name, "date_verified": date, "subject_name": subject_name, "teacher_name": username})
    st.success("The predicted names have been successfully saved to MongoDB.")
else:
    st.warning("Please enter a subject name to save the predicted names.")


# Redirect to Homepage button
go_to_homepage = st.button("Homepage")
if go_to_homepage:
    switch_page("Homepage")


# Main function
def main():
    # add_logo() # Call the function to add logo to sidebar
    # st.title("Odin App")
    add_bg_from_url()
    add_mbg_from_url()

    session_state = get_session_state()


    if  session_state.get("is_logged_in", False):
        # Create a sidebar container for logged in user info
        user_info_container = st.sidebar.container()
        with user_info_container:
            st.subheader(f"Logged in as {session_state['username']}")

            user = users.find_one({"username": get_session_state().get("username")})
            if user:
                # Show profile photo
                profile_photo = user.get("profile_photo")
                if profile_photo:
                    image = Image.open(io.BytesIO(profile_photo))
                    image = image.resize((100, 100))
                    image = image.convert("RGBA")

                    # Create circular mask
                    size = (100, 100)
                    mask = Image.new('L', size, 0)
                    draw = ImageDraw.Draw(mask)
                    draw.ellipse((0, 0) + size, fill=255)

                    # Apply mask to image
                    output = ImageOps.fit(image, mask.size, centering=(0.5, 0.5))
                    output.putalpha(mask)

                    output_bytes = io.BytesIO()
                    output.save(output_bytes, format='PNG')
                    output_bytes.seek(0)

                    # Show profile photo
                    st.image(output_bytes, width=100)

        
        # Create a logout button container
        logout_container = st.sidebar.container()
        with logout_container:
            st.button("Logout", on_click=logout, key="logout_button")

def logout():
    set_session_state({"is_logged_in": False, "username": None})
    st._rerun()

if __name__ == "__main__":
    main()