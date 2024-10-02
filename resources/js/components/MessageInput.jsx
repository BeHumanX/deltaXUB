import axios from "axios";
import React, {useState} from "react";

const MessageInput = ({rootUrl}) =>{
    const [message,setMessage] = useState("");
    const messageRequest = async (text) => {
        try{
            const token = document
                .querySelector('meta[name="csrf-token"')
                .getAttribute('content');
            const response = await axios.post("http://localhost/8000/message",{
                text,
            },{
                headers: {'Accept' : "application/json",
                    'X-CSRF-TOKEN' : token,
                }
            });
            console.log(response.data);
        } catch(err){
            setError(err.message);
        }
    };
    
}