<?php
// Database connection file (db_connection.php)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tithi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch all data from the database
function fetchAllData()
{
    global $conn;

    $data = array();

    // Fetch navbar data
    $data['navbarData'] = fetchData('navbar_table');

    // Fetch home data
    $data['homeData'] = fetchData('home_section');

    // Fetch services data
    $data['servicesData'] = fetchData('services_table');

    // Fetch projects data
    $data['projectsData'] = fetchData('projects_table');

    // Fetch education data
    $data['educationData'] = fetchData('education_table');

    // Fetch social icons data
    $data['socialIconsData'] = fetchData('social_icons');

    // Fetch footer links data
    $data['footerLinksData'] = fetchData('footer_links');

    return $data;
}

// Function to fetch data from the database
function fetchData($tableName)
{
    global $conn;
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

// Function to insert a message into the database
function insertMessage($fullName, $email, $phoneNumber, $subject, $message)
{
    global $conn;

    $sql = "INSERT INTO contact_messages (full_name, email, phone_number, subject, message) 
            VALUES ('$fullName', '$email', '$phoneNumber', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanzida Moin Tithi | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <a href="#home" class="logo">Sanzida <span>Moin</span></a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <?php
            $navbarData = fetchData('navbar_table'); // Replace 'navbar_table' with your actual table name

            foreach ($navbarData as $item) {
            ?>
                <a href="<?php echo $item['link']; ?>" <?php echo ($item['is_active'] == 1) ? 'class="active"' : ''; ?>>
                    <?php echo $item['title']; ?>
                </a>
            <?php
            }
            ?>
        </nav>
    </header>

    <section class="home" id="home">
        <?php
        $homeData = fetchData('home_section'); // Replace 'home_section' with your actual table name

        foreach ($homeData as $item) {
        ?>
            <div class="home-img">
                <img src="<?php echo $item['image_url']; ?>" alt="Profile Picture">
            </div>

            <div class="home-content">
                <h1>Hi, It's<span><?php echo $item['name']; ?></span></h1>
                <h3 class="text-animation">I am a <span><?php echo $item['role']; ?></span></h3>
                <p><?php echo $item['description']; ?></p>

                <div class="social-icons">
                    <?php
                    $socialIconsData = fetchData('social_icons'); // Replace 'social_icons' with your actual table name

                    foreach ($socialIconsData as $icon) {
                    ?>
                        <a href="<?php echo $icon['link']; ?>"><i class='bx <?php echo $icon['icon_class']; ?>'></i></a>
                    <?php
                    }
                    ?>
                </div>
                <a href="Sanzida_Moin_Tithi_Resume.pdf" class="btn" download><?php echo $item['cta_button_text']; ?></a>
            </div>
        <?php
        }
        ?>
    </section>

 <section class="services" id="services">
    <h2 class="heading">Skills & <span>Focus</span></h2>

    <div class="service-container">
        <?php
        $servicesData = fetchData('services_table');

        foreach ($servicesData as $service) {
        ?>
            <div class="services-box">
                <i class='bx <?php echo htmlspecialchars($service['icon'], ENT_QUOTES); ?>'></i>

                <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES); ?></h3>

                <button type="button" class="btn service-learn-btn"
                    data-icon="<?php echo htmlspecialchars($service['icon'], ENT_QUOTES); ?>"
                    data-title="<?php echo htmlspecialchars($service['title'], ENT_QUOTES); ?>"
                    data-description="<?php echo htmlspecialchars($service['description'], ENT_QUOTES); ?>">
                    Learn More
                </button>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Learn More Modal -->
    <div class="service-modal" id="serviceModal">
        <div class="service-modal-content">
            <button type="button" class="service-modal-close" id="serviceModalClose">&times;</button>
            <i class='bx' id="serviceModalIcon"></i>
            <h3 id="serviceModalTitle"></h3>
            <p id="serviceModalDescription"></p>
        </div>
    </div>
</section>
<section class="projects" id="projects">
    <h2 class="heading">Latest <span>Projects</span></h2>

    <div class="projects-container">
        <?php
        $projectsData = fetchData('projects_table');

        $projectTags = [
            'LaravelProject-Foodie' => ['Laravel', 'MySQL', 'Bootstrap', 'PHP'],
            'Dynamic Portfolio' => ['PHP', 'JavaScript', 'CSS', 'MySQL'],
            'Colorful Fruit Detection and Counting System' => ['Python', 'OpenCV', 'Gradio', 'Image Processing'],
            'Bank Management System' => ['Java Swing', 'MySQL', 'Desktop App'],
            'SWC 3D Interactive Visualization' => ['OpenGL', 'GLSL', 'GLFW', 'GLM']
        ];

        foreach ($projectsData as $project) {
            $title = $project['title'];
            $tags = $projectTags[$title] ?? ['Project'];
        ?>
            <div class="project-card">
                <div class="project-image">
                    <img src="<?php echo htmlspecialchars($project['image_url'], ENT_QUOTES); ?>" 
                         alt="<?php echo htmlspecialchars($project['title'], ENT_QUOTES); ?>">
                </div>

                <div class="project-content">
                    <div class="project-tags">
                        <?php foreach ($tags as $tag) { ?>
                            <span><?php echo htmlspecialchars($tag, ENT_QUOTES); ?></span>
                        <?php } ?>
                    </div>

                    <h3><?php echo htmlspecialchars($project['title'], ENT_QUOTES); ?></h3>

                    <p><?php echo htmlspecialchars($project['description'], ENT_QUOTES); ?></p>

                    <a href="<?php echo htmlspecialchars($project['github_link'], ENT_QUOTES); ?>" 
                       target="_blank" 
                       class="project-btn">
                        <i class='bx bxl-github'></i> GitHub
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
    <section class="timeline-section" id="education">
        <h2 class="heading">Education</h2>
        <div class="timeline-items">
            <?php
            $educationData = fetchData('education_table'); // Replace 'education_table' with your actual table name

            foreach ($educationData as $educationItem) {
            ?>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date"><?php echo $educationItem['year']; ?></div>
                    <div class="timeline-content">
                        <h3><?php echo $educationItem['degree']; ?></h3>
                        <p><?php echo $educationItem['description']; ?><br>
                            <a href="<?php echo $educationItem['institution_link']; ?>"><?php echo $educationItem['institution']; ?></a>
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <!-- Contact Me Section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact<span> Me</span></h2>

        <form action="#" method="post">
            <div class="input-box">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="tel" name="phone_number" placeholder="Phone number" required>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit_message" value="Send Message" class="btn">
        </form>

        <?php
        // Process form submission
        if (isset($_POST['submit_message'])) {
            $fullName = $_POST['full_name'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phone_number'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if (insertMessage($fullName, $email, $phoneNumber, $subject, $message)) {
                echo '<p class="success-message">Message sent successfully!</p>';
            } else {
                echo '<p class="error-message">Error: Unable to send the message. Please try again later.</p>';
            }
        }
        ?>
    </section>

    <footer class="footer">
        <div class="social">
            <?php
            $socialIconsData = fetchData('social_icons'); // Replace 'social_icons' with your actual table name

            foreach ($socialIconsData as $icon) {
            ?>
                <a href="<?php echo $icon['link']; ?>"><i class='bx <?php echo $icon['icon_class']; ?>'></i></a>
            <?php
            }
            ?>
        </div>
        <ul class="list">
            <?php
            $footerLinksData = fetchData('footer_links'); // Replace 'footer_links' with your actual table name

            foreach ($footerLinksData as $link) {
            ?>
                <li>
                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </footer>

    <script src="script.js"></script>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>