function handleSocket(payload) {

    socket.send(payload);
    socket.emit("message_sent",{payload});
}
function askForApproval(title, text, icon) {
    if(Notification.permission === "granted") {
        createNotification(title,
            text,
            icon);
    }
    else {
        Notification.requestPermission(permission => {
            if(permission === 'granted') {
                createNotification(title,
                    text,
                    icon);
            }
        });
    }
}

function createNotification(title, text, icon) {
    const noti = new Notification(title, {
        body: text,
        icon
    });
}