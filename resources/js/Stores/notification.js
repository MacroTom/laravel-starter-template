import { reactive } from 'vue';

export const store = reactive({
    notifications: [],
    addNotification: (message, duration, type) => {
        store.notifications.push({
            uid: store.generateUUID(),
            message,
            duration,
            type
        });
    },
    deleteNotification: (uid) => {
        const index = store.notifications.findIndex(n => n.uid === uid);

        if(index !== -1){
            store.notifications.splice(index, 1);
        }
    },
    generateUUID: () => {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            const r = Math.random() * 16 | 0; // Random number between 0 and 15
            const v = c === 'x' ? r : (r & 0x3 | 0x8); // If 'y', ensure 8,9,a,b
            return v.toString(16); // Convert to hexadecimal
        });                 
    },
});