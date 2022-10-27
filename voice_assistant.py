import time
import speech_recognition as sr
import pyttsx3
from datetime import datetime
import webbrowser

class Voice_Assistant():
    def __init__(self):
        super().__init__()
        self.i = 0
        
    def speak(self,say):
        self.engine = pyttsx3.init()
        self.engine.say(say)
        self.engine.runAndWait()

    def re_listen(self):
        self.response = sr.Recognizer()
        with sr.Microphone() as source:
            print("Listening...")
            audio = self.response.listen(source)
        try:
            self.phrase = self.response.recognize_google(audio, language="en-in")
            self.phrase = self.phrase.lower()
            print(self.phrase)
        except sr.UnknownValueError:
            self.speak("You don't say anything.")
            self.phrase = "repeat"
        return self.phrase

    def listen(self):
        self.speak("How can i help you?")
        while(1):
            self.response = sr.Recognizer()
            with sr.Microphone() as source:
                print("Listening...")
                audio = self.response.listen(source)
            if self.i==3:
                self.speak("I close the program because you did not make any requests.")
                time.sleep(1)
                self.speak("Have a good day "+self.name[0][0])
                break
            try:
                self.phrase = self.response.recognize_google(audio, language="en-in")
                self.phrase = self.phrase.lower()
                print(self.phrase)
            except sr.UnknownValueError:
                self.speak("You don't say anything. I will close soon.")
                self.i += 1
                self.phrase = ""

            if(len(self.phrase)!=0):
                self.i = 0

            elif "time" in self.phrase:
                time_now = datetime.now().strftime("%H:%M:%S")    
                self.speak("The time is {}".format(time_now))

            elif "search" in self.phrase or "google" in self.phrase:
                list = self.phrase.split(" ")
                a = list.index("search")
                search = ""
                for i in list[a+1:]:
                    search += str(i+" ")
                webbrowser.open_new_tab("https://www.google.com/search?q=+"+search)
                if "on google" in self.phrase:
                    self.speak("I am searching "+search)
                else:
                    self.speak("I am searching "+search+"on Google")


       
assistant = Voice_Assistant()