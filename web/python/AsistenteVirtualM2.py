import pyttsx3
import speech_recognition as sr     #Utiliza la libreria de reconocimiento de voz
import pygame
#from playsound import playsound

# Instalar pip install pyttsx3, luego python -m pip install SpeechRecognition, finalmente pip install pyaudio
# Python 3.9.6

# Modificado por: Cristian, Thayly, Brandon

#pip install audio-denoiser
#noisereduce
#python-noise-cancellation

#pip install playsound

import webbrowser       #Libreria para abrir páginas web    
#import serial
import time

# Función para enviar un comando al Arduino
#ser=serial.Serial('COM6', 9600)
#def enviar_comando(comando):
 #   ser.write(comando.encode())
  #  time.sleep(s)





r = sr.Recognizer()
#Configuración de la voz
engine = pyttsx3.init()
engine.setProperty('rate', 155)
engine.setProperty('voice', 'HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Speech\Voices\Tokens\MSTTS_V110_esMX_RaulMM')
engine.setProperty('volume', 1)

def decirVozAlta(escuchando):
    engine.say(escuchando)
    print(escuchando)
    engine.runAndWait()

#playsound(r"C:\Users\iran1\OneDrive\Documentos\Cerro Azul\7. Septimo Semestre\Inteligencia Artificial\TEMA 3\NetflixAudio.mp3")    
#def cargar_recursos():
 #   pygame.mixer.init()
 #   pygame.mixer.music.set_volume(1.0)  # Asegúrate de que el volumen está al máximo
 #   try:
 #       pygame.mixer.music.load("C:/xampp/htdocs/Audio3.wav")
 #       pygame.mixer.music.play()
 #       while pygame.mixer.music.get_busy():  # Espera hasta que el audio termine de reproducirse
 #          time.sleep(1)
  #  except pygame.error as e:
  #      print(f"Error al cargar o reproducir el audio: {e}")

#cargar_recursos()

#texto = "Cargando Recursos"
#decirVozAlta(texto)
activo = True
usuario = ""


texto = "Saludos, soy tu asistente virtual Anthony. ¿En qué te puedo ayudar? "
decirVozAlta(texto)
activo = True
x=1
while(activo):                      
    with sr.Microphone() as microfono:
        r.adjust_for_ambient_noise(microfono, duration=1)  # Ajusta el nivel de energía basado en el ruido de fondo
        print (x)
        audio = r.listen(microfono, phrase_time_limit=8)
        try:
            text = r.recognize_google(audio, language="es-MX")
            print('Has dicho: {}'.format(text))
            #La base de conocimiento, debe de coincidir con la semántica, sintaxis correcta
            #Palabras clave seleccionadas.
            base_de_conocimiento = open("BaseConocimientoMF.pl")
            with base_de_conocimiento as obtener_lineas:
                lineas_base_de_conocimiento = obtener_lineas.readlines()
            for linea in lineas_base_de_conocimiento:
                #print(linea.rstrip())
                
                accion = linea.rsplit("(")
                agente = accion[1].rsplit(",")
                objeto = agente[1].rsplit(")")
                
                #print(agente[0]+'-'+accion[0]+'-'+objeto[0])
                
                if agente[0] in text.title():
                    if accion[0] in text.title():
                        if objeto[0] in text.title():
                            if objeto[0] == "Google":
                                decirVozAlta(usuario + " voy ha abrir "+ objeto[0])
                                webbrowser.open('http://google.com')
                            if objeto[0] == "Gmail":
                                webbrowser.open('http://gmail.com') 
                                decirVozAlta(usuario + " voy ha abrir "+ objeto[0])   
                            if objeto[0] == "Programa":
                                activo=False
                            if accion[0]=='Encendido' and 'Encendido' in text.title(): 
                                if objeto[0] in ["Total"]: 
                                  #  enviar_comando("encendido_total") 
                                    decirVozAlta("Luminarias encendidas")
                            if accion[0]=='Apagado' and 'Apagado' in text.title():
                                if objeto[0] in ["Total"]:
                                   decirVozAlta("Luminarias apagadas")
                                    
                            

                            break
                             

                elif "Salir" in text.title():
                    activo=False
                    break
                elif "salir" in text.title():
                    activo=False
                    break
                elif "terminar" in text.title():
                    activo=False
                    break
        except:
            decirVozAlta('Repetir, por favor')
        x=x+1
texto ="Adios, nos vemos"
decirVozAlta(texto)

# Cierra el puerto serial
#ser.close()