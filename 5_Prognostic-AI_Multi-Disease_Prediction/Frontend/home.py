import pickle
import streamlit as st
from streamlit_option_menu import option_menu
from uuid import uuid4

def get_session_state():
    # Get the session state for the current session ID
    if "session_id" not in st.session_state:
        st.session_state.session_id = str(uuid4())
    if st.session_state.session_id not in st.session_state:
        st.session_state[st.session_state.session_id] = {}
    return st.session_state[st.session_state.session_id]

def set_session_state(state):
    # Set the session state for the current session ID
    if "session_id" not in st.session_state:
        st.session_state.session_id = str(uuid4())
    if st.session_state.session_id not in st.session_state:
        st.session_state[st.session_state.session_id] = {}
    st.session_state[st.session_state.session_id] = state


def register():
    st.header("Register")
    username = st.text_input("Username")
    password = st.text_input("Password", type="password")
    confirm_password = st.text_input("Confirm Password", type="password")
    
    if st.button("Register"):
        if password == confirm_password:
            st.success("You have successfully registered.")
        else:
            st.error("Passwords do not match.")
            
def login():
    st.header("Login")
    username = st.text_input("Username")
    password = st.text_input("Password", type="password")
    
    if st.button("Login"):
        if username == "test" and password == "123456":
            set_session_state({"is_logged_in": True, "username": username})
            st.success("Logged in as {}".format(username))
        elif username == "nishank" and password == "nishank":
            set_session_state({"is_logged_in": True, "username": username})
            st.success("Logged in as {}".format(username))
        else:
            st.error("Incorrect username or password.")

def logout():
    set_session_state({"is_logged_in": False, "username": None})
    st._rerun()

# Main App
def main():
    st.title("Multiple Disease Prediction System")
    
    menu = ["Login", "Register"]
    choice = st.sidebar.selectbox("Select an option", menu)
    
    # Check if the user is logged in
    session_state = get_session_state()
    is_logged_in = session_state.get("is_logged_in", False)
    username = session_state.get("username", None)

    # Create a logout button container if the user is logged in
    if is_logged_in:
        logout_container = st.sidebar.container()
        with logout_container:
            st.button("Logout", on_click=logout)
    
    # Show the appropriate page based on user selection
    if choice == "Login":
        login()
    elif choice == "Register":
        register()
    elif is_logged_in:
        st.success(f"Logged in as {username}")

if __name__ == '__main__':
    main()