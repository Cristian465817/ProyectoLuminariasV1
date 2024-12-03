#Elaborado por: Luis Manuel Bermúdez
#Modificado por: Cristian y Thayly
import sys 
import serial  #Para instalar esta libreria requiere instalar PIP, "python install pip",
                # despues instalar "pip install pyserial" 
import time
# Configura el puerto serial (ajusta el puerto según tu sistema)
ser = serial.Serial('COM4', 9600)
time.sleep(2) 

def enviar_comando(comando):
    ser.write(comando.encode())
    time.sleep(2)

def main(): 
    
    if len(sys.argv) > 1: 
        valor = sys.argv[1] 
        print(f"Valor recibido: {valor}") 
        if valor == 'encender_LC1':
            enviar_comando("encender_LC1")
            print("LED encendido")
        elif valor == 'apagar_LC1':
            enviar_comando("apagar_LC1")
            print("LED apagado")
        else:
            print("Opción inválida")
    else: 
        print("No se recibió ningún valor") 
    ser.close()
if __name__ == "__main__": 
    main()



