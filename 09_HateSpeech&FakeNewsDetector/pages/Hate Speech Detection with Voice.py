from sklearn.linear_model import LogisticRegression
from sklearn.feature_extraction.text import TfidfVectorizer
from PyDictionary import PyDictionary
from nltk.corpus import wordnet
import streamlit as st
from PIL import Image, ImageDraw
import json
import requests
from streamlit_lottie import st_lottie
from PIL import Image
from pytesseract import pytesseract
import pandas as pd
import streamlit as st
from sklearn.tree import DecisionTreeClassifier
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.model_selection import train_test_split
import nltk
nltk.download('wordnet')
import random
import speech_recognition as sr
import pandas as pd
import numpy as np
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
import re
import nltk
stemmer = nltk.SnowballStemmer("english")
from nltk.corpus import stopwords
import string
stopword = set(stopwords.words("english"))
from joblib import dump, load
import streamlit as st
from PIL import Image, ImageDraw
from Homepage import get_session_state, set_session_state

def is_user_logged_in():
    return get_session_state().get("is_logged_in", False)

# Read the data
df = pd.read_csv("twitter_data.csv")

# Define the labels
df['labels'] = df['class'].map({0:"Hate Speech Detected", 1:"Offensive language Detected", 2:"No hate speech detected"})
df = df[['tweet','labels']]

# Define the function to preprocess the input text
def clean(text):
    text = str(text).lower()
    text = re.sub('\[.*?\]', '', text)
    text = re.sub('https?://\S+|www\.\S+', '', text)
    text = re.sub('<.*?>+', '', text)
    text = re.sub('[%s]' %re.escape(string.punctuation), '', text)
    text = re.sub('\n', '', text)
    text = re.sub('\w*\d\w*', '', text)
    text = [word for word in text.split(' ') if word not in stopword]
    text =" ".join(text)
    text = [stemmer.stem(word) for word in text.split(' ')]
    text =" ".join(text)
    return text

# Preprocess the tweets
df["tweet"] = df["tweet"].apply(clean)

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(df["tweet"], df["labels"], test_size=0.33, random_state=42)

# Define the CountVectorizer
cv = CountVectorizer()

# Fit and transform the training data
X_train = cv.fit_transform(X_train)

# Train the DecisionTreeClassifier model
clf = DecisionTreeClassifier()
clf.fit(X_train, y_train)

# Dump the trained model
dump(clf, 'my_model.joblib')

# Load the trained model
clf = load('my_model.joblib')

st.set_page_config(
    page_title="The Truth Project",
    page_icon="Hello"
)

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

#st.title("The Truth Project")
#st.sidebar.success("Select one of the option below")

image = Image.open('8.PNG')
st.image(image)

st.header("The Truth Project")
st.text("The Truth Project is a software tool that uses artificial intelligence and natural")
st.text("language processing techniques to identify instances of hate speech in written or")
st.text("spoken language.")

image = Image.open('3.PNG')
st.image(image)

st.header("Hate Speech Detector")
st.text("Hate speech is any form of speech that targets a particular group of people based on")
st.text("their race, ethnicity, religion, gender, sexual orientation, or other characteristic.")
st.text("Hate speech detectors use a range of techniques, including keyword analysis,")
st.text("sentiment analysis, and context analysis, to identify and flag instances of")
st.text("hate speech.")

st.subheader(
    "Click on the button below to give voice as an input")


def load_lottiefile(filepath: str):
    with open(filepath, "r") as f:
        return json.load(f)
    

lottie_coding = load_lottiefile("arrow_down.json")
st_lottie(
    lottie_coding,
    height=100,
)

def replace_hate_word_with_synonym(sentence):
    # Define a list of hate words to replace
    hate_words = ["hate", "dislike", "despise", "loathe", "abhor"]
    
    # Tokenize the sentence into words
    words = nltk.word_tokenize(sentence)
    
    # Loop through the words and replace any hate word with a synonym
    for i in range(len(words)):
        if words[i] in hate_words:
            synonyms = []
            for syn in wordnet.synsets(words[i]):
                for lemma in syn.lemmas():
                    if lemma.name() != words[i]:
                        synonyms.append(lemma.name())
            if len(synonyms) > 0:
                synonym = random.choice(synonyms)
                words[i] = synonym
    
    # Join the words back into a sentence
    new_sentence = " ".join(words)
    
    return new_sentence

if is_user_logged_in():
    if st.button('Press and Speak'):
        r = sr.Recognizer()
        with sr.Microphone() as source:
            st.write("Speak something...")
            audio = r.listen(source)
            try:
                text = r.recognize_google(audio)
                st.write("You said: " + text)
                
                processed_input = clean(text)
                # Use the trained model to predict the label
                X_test = cv.transform([processed_input])
                prediction = clf.predict(X_test)[0]

                # Show the prediction
                if prediction == "Hate Speech Detected":
                    st.error(prediction)
                elif prediction == "Offensive language Detected":
                    st.warning(prediction)
                else:
                    st.success(prediction)

        
            except sr.UnknownValueError:
                error = st.write("Could not understand audio")
            except sr.RequestError as e:
                st.write(
                    "Could not request results from Google Speech Recognition service; {0}".format(e))

else:
    st.error("Please login to continue")



    