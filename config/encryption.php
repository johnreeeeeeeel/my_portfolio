<?php
    $ENCRYPTION_KEY = getenv('ENCRYPTION_KEY') ?: 'mysecretkey1234567890123456'; // 32 bytes for AES-256
    $ENCRYPTION_METHOD = "AES-256-CBC";

    if (!function_exists('encrypt')) {
        function encrypt($plaintext) {
            global $ENCRYPTION_KEY, $ENCRYPTION_METHOD;
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($ENCRYPTION_METHOD));
            $encrypted = openssl_encrypt($plaintext, $ENCRYPTION_METHOD, $ENCRYPTION_KEY, 0, $iv);
            return base64_encode($iv . $encrypted);
        }
    }

    if (!function_exists('decrypt')) {
        function decrypt($ciphertext_base64) {
            global $ENCRYPTION_KEY, $ENCRYPTION_METHOD;
            $decoded = base64_decode($ciphertext_base64);
            $iv_length = openssl_cipher_iv_length($ENCRYPTION_METHOD);
            $iv = substr($decoded, 0, $iv_length);
            $encrypted_data = substr($decoded, $iv_length);
            return openssl_decrypt($encrypted_data, $ENCRYPTION_METHOD, $ENCRYPTION_KEY, 0, $iv);
        }
    }
?>