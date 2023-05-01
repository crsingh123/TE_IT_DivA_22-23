import pickle
import streamlit as st
from home import get_session_state,set_session_state

def get_data_from_text_file(uploaded_file):
    data = {}
    for line in uploaded_file.getvalue().decode().split('\n'):
        if line.strip():
            key, value = line.split(':')
            try:
                data[key.strip()] = float(value.strip())
            except ValueError:
                st.warning(f"Could not extract numeric value from '{value.strip()}'. Skipping this field.")
    return data






def is_user_logged_in():
    return get_session_state().get("is_logged_in", False)

heart_disease_model = pickle.load(open('C:/Users/Nishank Lalit Jain/OneDrive/Desktop/Multiple DIsease Prediction/heart_disease_model.sav','rb'))

if is_user_logged_in():
    st.title('Heart Prediction using ML')
    
    uploaded_file = st.file_uploader("Upload a text file with input data", type=["txt"])
    if uploaded_file is not None:
        # display uploaded file
        st.success("File uploaded successfully!")
        st.write("Uploaded file content:")
        # st.write(uploaded_file.getvalue().decode())
        # extract data from text file
        data = get_data_from_text_file(uploaded_file)

        # fill form with extracted data
        age = st.number_input('Age', value=int(data.get('Age', '')))        
        sex = st.number_input('Sex', value=int(data.get('Sex', '')))
        cp = st.number_input('Chest Pain types', value=int(data.get('Chest Pain types', '')))
        trestbps = st.number_input('Resting Blood Pressure', value=int(data.get('Resting Blood Pressure', '')))
        chol = st.number_input('Serum Cholestoral in mg/dl', value=int(data.get('Serum Cholestoral in mg/dl', '')))
        fbs = st.number_input('Fasting Blood Sugar > 120 mg/dl', value=int(data.get('Fasting Blood Sugar > 120 mg/dl', '')))
        restecg = st.number_input('Resting Electrocardiographic results', value=int(data.get('Resting Electrocardiographic results', '')))
        thalach = st.number_input('Maximum Heart Rate achieved', value=int(data.get('Maximum Heart Rate achieved', '')))
        exang = st.number_input('Exercise Induced Angina', value=int(data.get('Exercise Induced Angina', '')))
        oldpeak = st.number_input('ST depression induced by exercise', value=int(data.get('ST depression induced by exercise', '')))
        slope = st.number_input('Slope of the peak exercise ST segment', value=int(data.get('Slope of the peak exercise ST segment', '')))
        ca = st.number_input('Major vessels colored by flourosopy', value=int(data.get('Major vessels colored by flourosopy', '')))
        thal = st.number_input('thal', value=int(data.get('thal', '')))

        # code for Prediction
        heart_diagnosis = ''

        # creating a button for Prediction    
        if st.button("Heart Test Result"):
                heart_prediction = heart_disease_model.predict([[age, sex, cp, trestbps, chol, fbs, restecg,thalach,exang,oldpeak,slope,ca,thal]])                          
            
                if (heart_prediction[0] == 1):
                        heart_diagnosis = 'The person is having heart disease'
                else:
                        heart_diagnosis = 'The person does not have any heart disease'

        st.success(heart_diagnosis)
else:
    st.error("Please Login to continue")
