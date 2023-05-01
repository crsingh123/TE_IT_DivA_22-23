import streamlit as st
import pickle
from home import get_session_state, set_session_state

def get_data_from_text_file(uploaded_file):
    data = {}
    for line in uploaded_file.getvalue().decode().split('\n'):
        if line.strip():
            key, value = line.split(':')
            try:
                data[key.strip()] = float(value.strip())
            except ValueError:
                st.warning(f"Could not extract integer value from '{value.strip()}'. Skipping this field.")
    return data

def is_user_logged_in():
    return get_session_state().get("is_logged_in", False)

diabetes_model = pickle.load(open('C:/Users/Nishank Lalit Jain/OneDrive/Desktop/Multiple DIsease Prediction/diabetes_model.sav', 'rb'))
if is_user_logged_in():
    st.title('Diabetes Prediction using ML')
    
    uploaded_file = st.file_uploader("Upload a text file with input data", type=["txt"])
    if uploaded_file is not None:
        # display uploaded file
        st.success("File uploaded successfully!")
        st.write("Uploaded file content:")
        # st.write(uploaded_file.getvalue().decode())
        # extract data from text file
        data = get_data_from_text_file(uploaded_file)

        # fill form with extracted data
        Pregnancies = st.text_input('Number of Pregnancies', value=str(data.get('Number of Pregnancies', '')))
        Glucose = st.text_input('Glucose Level', value=str(data.get('Glucose Level', '')))
        BloodPressure = st.text_input('Blood Pressure value', value=str(data.get('Blood Pressure value', '')))
        SkinThickness = st.text_input('Skin Thickness value', value=str(data.get('Skin Thickness value', '')))
        Insulin = st.text_input('Insulin Level', value=str(data.get('Insulin Level', '')))
        BMI = st.text_input('BMI value', value=str(data.get('BMI value', '')))
        DiabetesPedigreeFunction = st.text_input('Diabetes Pedigree Function value', value=str(data.get('Diabetes Pedigree Function value', '')))
        Age = st.text_input('Age of the Person', value=str(data.get('Age of the Person', '')))

        # code for Prediction
        diab_diagnosis = ''

        # creating a button for Prediction    
        if st.button("Diabetes Test Result"):
            diab_prediction = diabetes_model.predict([[Pregnancies, Glucose, BloodPressure, SkinThickness, Insulin, BMI, DiabetesPedigreeFunction, Age]])

            if (diab_prediction[0] == 1):
                diab_diagnosis = "The person has Diabetes"
            else:
                diab_diagnosis = "The person does not have Diabetes"

        st.success(diab_diagnosis)
else:
    st.error("Please Login to continue")