<?php
        session_start();
        if(session_destroy()){
            header("Location: __DIR__ . '/../index.php");
        }

