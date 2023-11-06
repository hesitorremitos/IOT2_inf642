/* 
 * MQTT-WebClient example for Web-IO 4.0
*/
var hostname = "driver.cloudmqtt.com";
var port = 38946;
var clientId = "webio4mqttexample";
clientId += new Date().getUTCMilliseconds();
var username = "ewdpapwh";
var password = "B4WTn_t0AJUN";
var subscription = "hector/led";
var temperaturas =  -1;
mqttClient = new Paho.MQTT.Client(hostname, port, clientId);
mqttClient.onMessageArrived = MessageArrived;
mqttClient.onConnectionLost = ConnectionLost;
Connect();

/*Initiates a connection to the MQTT broker*/
function Connect() {
	mqttClient.connect({
		onSuccess: Connected,
		onFailure: ConnectionFailed,
		keepAliveInterval: 10,
		userName: username,
		useSSL: true,
		password: password
	});
}

/*Callback for successful MQTT connection */
function Connected() {
	console.log("Connected");
	mqttClient.subscribe(subscription);
}

/*Callback for failed connection*/
function ConnectionFailed(res) {
	console.log("Connect failed:" + res.errorMessage);
}

/*Callback for lost connection*/
function ConnectionLost(res) {
	if (res.errorCode != 0) {
		console.log("Connection lost:" + res.errorMessage);
		Connect();
	}
}

/*Callback for incoming message processing */
function MessageArrived(message) {
	console.log(message.destinationName + " : " + message.payloadString);
	g.refresh(message.payloadString)
	temperaturas = parseFloat(message.payloadString);
	var topic = message.destinationName.split("/");
}



