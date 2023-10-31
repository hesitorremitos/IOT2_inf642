from flask import Flask, render_template, request
import paho.mqtt.client as mqtt

app = Flask(__name__, template_folder="views")


def on_connect(client, userdata, flags, rc):
    print("Conectado " + str(rc))
    client.subscribe(topic)


def on_message(client, userdata, msg):
    print(msg.topic + " " + str(msg.payload))


servidormqtt = "driver.cloudmqtt.com"
usuario = "hector"
contrasena = "hero"
topic = "led"

client = mqtt.Client()
client.on_connect = on_connect
client.on_message = on_message

client.username_pw_set(username=usuario, password=contrasena)
client.connect(servidormqtt, 18946, 60)

client.loop_start()


@app.route("/")
def home():
    return render_template("login.html")


app.run("0.0.0.0")
