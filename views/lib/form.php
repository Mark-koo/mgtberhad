<?php
$postData = $uploadedFile = $statusMsg = '';
if (isset($_POST['submit'])) {
    // Get the submitted form data
    $postData = $_POST;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if (!empty($name) && !empty($email) && !empty($phone)) {

        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $statusMsg = 'Please enter your valid email.';
        } else {
            $uploadStatus = 1;

            // Upload attachment file
            if (!empty($_FILES["attachment"]["name"])) {

                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to the server
                    if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)) {
                        $uploadedFile = $targetFilePath;
                    } else {
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } else {
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }

            if ($uploadStatus == 1) {

                // Recipient Email, write your email here
                $toEmail = 'info@megatrustee.com.my';

                // Sender Data
                $from = $email;
                $fromName = $name;

                // Subject
                $emailSubject = 'Enquiry From Megatrustee.com.my';

                // Service
                $serviceContent = '';
                if (!empty($service)) {
                    $serviceContent = '<p><b>Selected:</b> ' . $service . '</p>';
                }

                // Message 
                $htmlContent = '<h2>Website Enquiry</h2>
                    <p><b>Name:</b> ' . $name . '</p>
                    <p><b>Email:</b> ' . $email . '</p>
                    <p><b>Phone:</b> ' . $phone . '</p>
                    ' . $serviceContent . '
                    <p><b>Message:</b> ' . $message . '</p>';

                // Header for sender info
                $headers = "From:" . $fromName . " <" . $from . ">";

                if (!empty($uploadedFile) && file_exists($uploadedFile)) {

                    // Boundary 
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

                    // Preparing attachment
                    if (is_file($uploadedFile)) {
                        $message .= "--{$mime_boundary}\n";
                        $fp = @fopen($uploadedFile, "rb");
                        $data = @fread($fp, filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"" . basename($uploadedFile) . "\"\n" .
                            "Content-Description: " . basename($uploadedFile) . "\n" .
                            "Content-Disposition: attachment;\n" . " filename=\"" . basename($uploadedFile) . "\"; size=" . filesize($uploadedFile) . ";\n" .
                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }

                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);

                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                } else {
                    // Set content-type header for sending HTML email
                    $headers .= "\r\n" . "MIME-Version: 1.0";
                    $headers .= "\r\n" . "Content-type:text/html;charset=UTF-8";

                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
                }

                // If mail sent
                if ($mail) {
                    $statusMsg = 'Your Message was submitted successfully!';
                    $postData = '';

                    $eventParater = '';
                    if ($serviceForm) {
                        $eventParater = 'service';
                    } else if ($contactForm) {
                        $eventParater = 'contact';
                    } else {
                        $eventParater = 'career';
                    }
                    echo "gtag('event', 'event_form_submit', { " . $eventParater . "});";

                } else {
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    } else {
        $statusMsg = 'Please fill all the fields.';
    }
}
?>


<?php if ($serviceForm): ?>
<form class="blue" method="post" action="">
    <input name="name" type="text" placeholder="Your Name(*)" required>
    <input name="email" type="email" placeholder="Your Email(*)" required>
    <input name="phone" type="text" placeholder="Your Phone(*)" required>
    <select name="service" required>
        <option value="">---</option>
        <option value="Contingency Trust">Contingency Trust</option>
        <option value="Personal Trust">Personal Trust</option>
        <option value="Corporate Trust">Corporate Trust</option>
        <option value="Will Writing">Will Writing</option>
        <option value="Administration of Estate">Administration of Estate</option>
        <option value="Interest Scheme">Interest Scheme</option>
        <option value="Escrow Services">Escrow Services</option>
        <option value="Others">Others</option>
    </select>
    <textarea name="message" placeholder="Your Messages" rows="10"></textarea>
    <button class="button blue" name="submit" type="submit">Submit</button>
</form>
<?php endif; ?>

<?php if ($contactForm): ?>
<form class="blue" method="post" action="">
    <div class="row">
        <div class="col-sm-6">
            <input name="name" type="text" placeholder="Your Name(*)" required>
        </div>
        <div class="col-sm-6">
            <input name="email" type="email" placeholder="Your Email(*)" required>
        </div>
        <div class="col-sm-6">
            <input name="phone" type="text" placeholder="Your Phone(*)" required>
        </div>
        <div class="col-sm-6">
            <select name="service" required>
                <option value="">---</option>
                <option value="Contingency Trust">Contingency Trust</option>
                <option value="Personal Trust">Personal Trust</option>
                <option value="Corporate Trust">Corporate Trust</option>
                <option value="Will Writing">Will Writing</option>
                <option value="Administration of Estate">Administration of Estate</option>
                <option value="Interest Scheme">Interest Scheme</option>
                <option value="Escrow Services">Escrow Services</option>
                <option value="Others">Others</option>
            </select>
        </div>
    </div>
    <textarea name="message" placeholder="Your Messages" rows="10"></textarea>
    <button class="button blue" name="submit" type="submit">Submit</button>
</form>
<?php endif; ?>

<?php if ($careerForm): ?>
<form class="white" method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <input name="name" type="text" placeholder="Your Name(*)" required>
        </div>
        <div class="col-md-6">
            <input name="email" type="email" placeholder="Your Email(*)" required>
        </div>
    </div>
    <input name="phone" type="text" placeholder="Your Phone(*)" required>
    <textarea name="message" placeholder="Your Messages" rows="10"></textarea>
    <div class="row">
        <div class="col-md-6">
            <label>Your Resume</label>
            <input type="file" name="attachment" multiple required>
        </div>
    </div>
    <button class="button" name="submit" type="submit">Submit</button>
</form>
<?php endif; ?>

<!-- Display submission status -->
<div style="margin-top:10px">
    <?php if (!empty($statusMsg)): ?>
    <p style="<?php if ($careerForm) {
            echo "color:white";
        } ?>">
        <?php echo $statusMsg; ?>
    </p>
    <?php endif; ?>
</div>