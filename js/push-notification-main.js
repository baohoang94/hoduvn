/**
 * Created by ngunp on 6/28/2017.
 */
function push_notification_main() {
    if (!('serviceWorker' in navigator)) {
        console.log("Browser not support service worker!");
        return;
    }
    var config = {
        apiKey: "AIzaSyBI_ef5ohWbES8r1Hwsp9SDIK7hp4fNaZQ",
        authDomain: "kyna-564c3.firebaseapp.com",
        databaseURL: "https://kyna-564c3.firebaseio.com",
        projectId: "kyna-564c3",
        storageBucket: "kyna-564c3.appspot.com",
        messagingSenderId: "884971139947"
    };
    firebase.initializeApp(config);

    const messaging = firebase.messaging();

    navigator.serviceWorker.register('/notification/js/push-notification-sw.js')
        .then(function (reg) {
            messaging.useServiceWorker(reg);
            return messaging.requestPermission()
                .then(function() {
                    console.log("Permission granted");
                    return messaging.getToken();
                })
                .then(function(token) {
                    console.log("Token: ", token);
                    sendTokenToServer(token);
                })
                .catch(function(err) {
                    console.log("Err: ", err);
                })
        })
        .catch(function (err) {
            console.log("Something wrong", err);
        });

    messaging.onMessage(function(payload) {
        console.log("payload: ", payload);
    });

    // Callback fired if Instance ID token is updated.
    messaging.onTokenRefresh(function() {
        messaging.getToken()
            .then(function(refreshedToken) {
                console.log('Token refreshed.');
                console.log('Refreshed token: ', refreshedToken);
                // Indicate that the new Instance ID token has not yet been sent to the
                // app server.
                sendTokenToServer(refreshedToken);
                // setTokenSentToServer(false);
                // Send Instance ID token to app server.
                // sendTokenToServer(refreshedToken);
                // ...
            })
            .catch(function(err) {
                console.log('Unable to retrieve refreshed token ', err);
                // showToken('Unable to retrieve refreshed token ', err);
            });
    });
}

function sendTokenToServer(Token)
{
    $.ajax({
        url: "/api/notification/update-token",
        type: "POST",
        data: {token: Token},
        success: function (res) {
            console.log("ajax success");
            console.log(res);
        },
        error: function (err) {
            console.log("ajax error");
            console.log(err);
        }
    });
}

setTimeout(push_notification_main, 5000);
// push_notification_main();