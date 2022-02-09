<?php

function validateLoginRequest(LoginRequest $request){
    if(!isset($request->username)){
        throw new ValidationException("Username is missing!");
    }
    elseif(!isset($request->password)){
        throw new ValidationException("Password is missing!");
    }
    elseif(trim($request->username) == ""){
        throw new Exception("Username is Empty!");
    }
    elseif(trim($request->password) == ""){
        throw new Exception("Password is Empty!");
    }
}