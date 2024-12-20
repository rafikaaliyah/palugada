<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['contact_name']);
    $email = htmlspecialchars($_POST['contact_email']);
    $message = htmlspecialchars($_POST['contact_message']);

    // Validasi input
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "rafikaaliyah30@gmail.com";
        $subject = "Pesan dari $name";
        $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
        $headers = "From: $email";

        // Kirim email
        if (mail($to, $subject, $body, $headers)) {
            echo "Pesan berhasil dikirim!";
        } else {
            echo "Gagal mengirim pesan.";
        }
    } else {
        echo "Semua bidang wajib diisi.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
?>