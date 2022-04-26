from gpiozero import OutputDevice
from gpiozero.pins.pigpio import PiGPIOFactory
from time import sleep

factory = PiGPIOFactory(host='192.168.0.10')

pin1 = OutputDevice(7,  pin_factory = factory)
pin2 = OutputDevice(8,  pin_factory = factory)
pin3 = OutputDevice(9,  pin_factory = factory)
pin4 = OutputDevice(10,  pin_factory = factory)

def backward():
    pin1.on()
    pin2.off()
    pin3.off()
    pin4.on()

def stop():
    pin1.off()
    pin2.off()
    pin3.off()
    pin4.off()

backward()
sleep(1)
stop()
