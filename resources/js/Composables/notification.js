import { store } from '@/Stores/notification.js';

export const triggerToast = (message, type='success', duration=3000) => {
    if(type === 'success'){
        const text = typeof message === 'object' ? message.props.flash?.message : message;

        store.addNotification(text, duration, type);
    }
    else if(type === 'error' && typeof message === 'object'){
        if('message' in message){
            store.addNotification(message.message, duration, type);
            return;
        }
    
        for (const key in message) {
            store.addNotification(message[key], duration, type);
        }
    }
    else{
        store.addNotification(message, duration, type);
    }
}