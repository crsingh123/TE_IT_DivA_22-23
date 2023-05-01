import pickle
import streamlit as st
from home import get_session_state,set_session_state

def get_data_from_text_file(uploaded_file):
    data = {}
    for line in uploaded_file.getvalue().decode().split('\n'):
        if line.strip():
            key, value = line.split(':')
            value = value.strip()
            if value:
                if value.lower() == 'none':
                    data[key.strip()] = None
                else:
                    try:
                        data[key.strip()] = float(value)
                    except ValueError:
                        st.warning(f"Could not extract float value from '{value}'. Skipping this field.")
    return data

def is_user_logged_in():
    return get_session_state().get("is_logged_in", False)
parkinsons_model = pickle.load(open('C:/Users/Nishank Lalit Jain/OneDrive/Desktop/Multiple DIsease Prediction/parkinsons_model.sav','rb'))

if is_user_logged_in():
    st.title('Parkinsons Prediction using ML')
    
    uploaded_file = st.file_uploader("Upload a text file with input data", type=["txt"])
    if uploaded_file is not None:
        # display uploaded file
        st.success("File uploaded successfully!")
        st.write("Uploaded file content:")
        # st.write(uploaded_file.getvalue().decode())
        # extract data from text file
        data = get_data_from_text_file(uploaded_file)

        # fill form with extracted data
        fo = st.text_input('MDVPFo(Hz)', value=str(data.get('MDVPFo(Hz)',)))
        fhi = st.text_input('MDVP Fhi(Hz)', value=str(data.get('MDVP Fhi(Hz)', )))
        flo = st.text_input('MDVP Flo(Hz)', value=str(data.get('MDVP Flo(Hz)', )))
        Jitter_percent = st.text_input('Jitter(%)', value=str(data.get('Jitter(%)',)))
        Jitter_Abs = st.text_input('Jitter(Abs)', value=str(data.get('Jitter(Abs)', )))
        RAP = st.text_input('RAP', value=str(data.get('RAP',)))
        PPQ = st.text_input('PPQ', value=str(data.get('PPQ', )))
        DDP = st.text_input('DDP', value=str(data.get('DDP', )))
        Shimmer= st.text_input('Shimmer', value=str(data.get('Shimmer', )))
        Shimmer_dB = st.text_input('Shimmer_dB', value=str(data.get('Shimmer_dB', )))
        APQ3 = st.text_input('APQ3', value=str(data.get('APQ3', )))
        APQ5 = st.text_input('APQ5', value=str(data.get('APQ5',)))
        APQ = st.text_input('APQ', value=str(data.get('APQ', )))
        DDA = st.text_input('DDA', value=str(data.get('DDA',)))
        NHR = st.text_input('NHR', value=str(data.get('NHR', )))
        HNR = st.text_input('HNR', value=str(data.get('HNR',)))
        RPDE = st.text_input('RPDE', value=str(data.get('RPDE', )))
        DFA = st.text_input('DFA', value=str(data.get('DFA', )))
        spread1 = st.text_input('spread1', value=str(data.get('spread1',)))
        spread2 = st.text_input('spread2', value=str(data.get('spread2', )))
        D2 = st.text_input('D2', value=str(data.get('D2',)))
        PPE = st.text_input('PPE', value=str(data.get('PPE',)))
        

    # code for Prediction
    parkinsons_diagnosis = ''
        
        # creating a button for Prediction    
    if st.button("Parkinson's Test Result"):
        parkinsons_prediction = parkinsons_model.predict([[fo, fhi, flo, Jitter_percent, Jitter_Abs, RAP, PPQ,DDP,Shimmer,Shimmer_dB,APQ3,APQ5,APQ,DDA,NHR,HNR,RPDE,DFA,spread1,spread2,D2,PPE]])                          
            
        if (parkinsons_prediction[0] == 1):
            parkinsons_diagnosis = "The person has Parkinson's disease"
        else:
            parkinsons_diagnosis = "The person does not have Parkinson's disease"
            
    st.success(parkinsons_diagnosis)
else:
    st.error("Please Login to continue")
