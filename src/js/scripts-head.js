{
    let notificationInfo = sessionStorage.getItem("notification-bar");
    
    if(notificationInfo && notificationInfo == "dismissed") {
        document.documentElement.classList.add("notification-closed");
    }
}