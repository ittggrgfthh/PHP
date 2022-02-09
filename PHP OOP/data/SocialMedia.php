<?php

class SocialMedia{
    public string $name;
}

class Facebook extends SocialMedia{
    final public function login(string $name, string $password): bool{
        return true;
    }
}

class FakeFacebook extends Facebook{
    //error, final function tidak bisa dioverride lagi
//     public function login(string $name, string $password): bool{
//         return false;
//     }
}



// Materi final Class

// class SocialMedia{
//     public string $name;
// }

// final class Facebook extends SocialMedia{

// }

//error
// class FakeFacebook extends Facebook{

// }