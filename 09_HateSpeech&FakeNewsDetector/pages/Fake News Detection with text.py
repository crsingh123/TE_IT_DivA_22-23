import joblib
import pandas  as pd
import numpy as np
import seaborn as sns
import matplotlib.pyplot as plt
from sklearn.metrics import accuracy_score
from sklearn.metrics import classification_report
import re
import string
import chardet
import streamlit as st
from Homepage import get_session_state, set_session_state
from PIL import Image, ImageDraw
import json
from streamlit_lottie import st_lottie

def is_user_logged_in():
    return get_session_state().get("is_logged_in", False)

# Load the model, vectorizer, and other necessary objects
model = joblib.load('model.joblib')
vectorizer = joblib.load('vectorizer.joblib')

#@st.cache(allow_output_mutation=True)
def wordopt(text):
    text = text.lower()
    text = re.sub('\[.*?\]', '  ', text)
    text = re.sub("\\W", "  ", text)
    text = re.sub('https?://\S+|www\.\S+', '  ', text)
    text = re.sub('<.*?>+', '  ', text)
    text = re.sub('[%s]' % re.escape(string.punctuation), '  ', text)
    text = re.sub('\n', '  ', text)
    text = re.sub('\w*\d\w*', '  ', text)
    return text

def predict_news(news):
    news = wordopt(news)
    new_x_test = [news]
    new_xv_test = vectorizer.transform(new_x_test)
    pred = model.predict(new_xv_test)
    return pred[0]

def main():
    # Load the image
    img = Image.open('4.PNG')

    # Add a circular mask to the image
    mask = Image.new('L', img.size, 0)
    draw = ImageDraw.Draw(mask)
    draw.ellipse((0, 0) + img.size, fill=255)
    img.putalpha(mask)

    # Display the image in the sidebar
    st.sidebar.image(img, use_column_width=True)

    st.sidebar.header('THE TRUTH PROJECT')
    st.sidebar.text('Hate Speech and Fake News Detector.')

    def load_lottiefile(filepath: str):
        with open(filepath, "r") as f:
            return json.load(f)


    lottie_coding = load_lottiefile("hello-expert.json")
    st_lottie(
        lottie_coding,
        height=400,
    )

    image = Image.open('8.PNG')
    st.image(image)

    st.header("The Truth Project")
    st.text("The Truth Project is a software tool that uses artificial intelligence and natural")
    st.text("language processing techniques to identify instances of hate speech in written or")
    st.text("spoken language.")

    image = Image.open("5.PNG")
    st.image(image)

    st.header("Fake News Detector")
    st.text("A fake news detector is a software tool that uses similar techniques to identify")
    st.text("instances of false or misleading information in written or spoken language.")
    st.text("Fake news is any type of news that is intentionally fabricated or misleading,")
    st.text("designed to misinform or manipulate the reader or viewer. Fake news detectors use a")
    st.text("range of techniques, including fact-checking, source analysis, and context analysis,")
    st.text("to identify and flag instances of fake news.")

    st.subheader("Enter the text containing the news in the text area below")

    def load_lottiefile(filepath: str):
        with open(filepath, "r") as f:
            return json.load(f)


    lottie_coding = load_lottiefile("arrow_down.json")
    st_lottie(
        lottie_coding,
        height=100,
    )

    if is_user_logged_in():

        # Get input from the user
        news = st.text_input("Enter news here:", "")

        # When the predict button is clicked, make the prediction and display the result
        if st.button("Predict"):
            prediction = predict_news(news)
            result = ""
        if prediction == 0:
            result = st.error("Alert!!! It is a fake news")
        elif prediction == 1:
            result = st.success("It is not a fake news but a authentic one")
        #st.write(result)

    else:
        st.error("Please login to continue")

if __name__ == "__main__":
    main()
