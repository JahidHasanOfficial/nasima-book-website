<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once 'head_link.php'; ?>
</head>

<body>

  <?php require_once 'header1.php'; ?>
  <?php
  error_reporting(~E_NOTICE);
  if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $customer_id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM profiles WHERE id =:uid');
    $stmt_edit->execute([':uid' => $customer_id]);
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  } else {
    header("Location: index");
  }

  if (isset($_POST['btn_save_updates'])) {
    $updateData = [
      ':email'        => $_POST['email'],
      ':first_name'   => $_POST['first_name'],
      ':surname'      => $_POST['surname'],
      ':category'     => isset($_POST['category']) ? json_encode($_POST['category']) : null,
      ':gender'       => $_POST['gender'],
      ':telephone'    => $_POST['telephone'],
      ':area'         => $_POST['area'],
      ':dob'          => $_POST['dob'],
      ':languages'    => isset($_POST['languages']) ? json_encode($_POST['languages']) : null,
      ':weight'       => $_POST['weight'],
      ':height'       => $_POST['height'],
      ':ethnicity'    => isset($_POST['ethnicity']) ? json_encode($_POST['ethnicity']) : null,
      ':hair_color'   => $_POST['hair_color'],
      ':eye_color'    => $_POST['eye_color'],
      ':size'         => $_POST['size'],
      ':hair_type'    => isset($_POST['hairType']) ? json_encode($_POST['hairType']) : null,
      ':trouser_size' => $_POST['trouser_size'],
      ':shoe_size'    => $_POST['shoe_size'],
      ':skills'       => isset($_POST['skills']) ? json_encode($_POST['skills']) : null,
      ':education'    => $_POST['education'],
      ':other_skills' => $_POST['other_skills'],
      ':dsf'          => $_POST['dsf'],
      ':instagram'    => $_POST['instagram'],
      ':youtube'      => $_POST['youtube'],
      ':vimeo'        => $_POST['vimeo'],
      ':privacy_policy' => isset($_POST['privacy_policy']) ? 1 : 0,
      ':uid'          => $id
    ];

    $sql = "UPDATE profiles SET 
                email=:email, first_name=:first_name, surname=:surname, category=:category, gender=:gender,
                telephone=:telephone, area=:area, dob=:dob, languages=:languages, weight=:weight, height=:height,
                ethnicity=:ethnicity, hair_color=:hair_color, eye_color=:eye_color, size=:size, hair_type=:hair_type,
                trouser_size=:trouser_size, shoe_size=:shoe_size, skills=:skills, education=:education,
                other_skills=:other_skills, dsf=:dsf, instagram=:instagram, youtube=:youtube, vimeo=:vimeo,
                privacy_policy=:privacy_policy 
            WHERE id=:uid";

    $stmt = $DB_con->prepare($sql);

    if ($stmt->execute($updateData)) {
      echo "<script>alert('Profile Successfully Updated');window.location.href='profile';</script>";
    } else {
      $errMSG = "Sorry, Data Could Not be Updated!";
    }
  }
  ?>

  <?php require_once 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Profile</h1>
      <hr>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body p-4">
             <form method="post" enctype="multipart/form-data" class="row g-5">
    <!-- Email -->
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
    </div>

    <!-- Password -->
    <div class="col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep old password">
    </div>

    <!-- First Name -->
    <div class="col-md-6">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($first_name) ?>" required>
    </div>

    <!-- Surname -->
    <div class="col-md-6">
        <label for="surname" class="form-label">Surname</label>
        <input type="text" class="form-control" id="surname" name="surname" value="<?= htmlspecialchars($surname) ?>" required>
    </div>

    <!-- Category (Multiple) -->
    <div class="col-md-6 mb-3">
        <label for="category" class="form-label fw-bold">Category</label>
        <select id="category" name="category[]" class="form-select" multiple>
            <?php
            $categories = ["Actor","Amateur Actor","Statist","Dancer","Speaker","Model","Musician","Singer"];
            foreach ($categories as $cat) {
                $selected = in_array($cat, $category) ? 'selected' : '';
                echo "<option value=\"$cat\" $selected>$cat</option>";
            }
            ?>
        </select>
    </div>

    <!-- Gender -->
    <div class="col-md-6">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Man" <?= $gender == 'Man' ? 'selected' : '' ?>>Man</option>
            <option value="Woman" <?= $gender == 'Woman' ? 'selected' : '' ?>>Woman</option>
        </select>
    </div>

    <!-- Telephone -->
    <div class="col-md-6">
        <label for="telephone" class="form-label">Telephone</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" value="<?= htmlspecialchars($telephone) ?>" required>
    </div>

    <!-- Area -->
    <div class="col-md-6">
        <label for="area" class="form-label">Area</label>
        <select class="form-select" id="area" name="area" required>
            <?php
            $areas = ["The Capital","The Zealand","The Funen","North Jutland","Midtjylland","South Jutland","Bornholm","Greenland","the Faroe Islands"];
            foreach ($areas as $a) {
                $selected = $area == $a ? 'selected' : '';
                echo "<option value=\"$a\" $selected>$a</option>";
            }
            ?>
        </select>
    </div>

    <!-- Date of Birth -->
    <div class="col-md-6">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" value="<?= $dob ?>" required>
    </div>

    <!-- Languages (Multiple Select) -->
    <div class="col-md-6">
        <label for="languages" class="form-label">Languages</label>
        <select class="form-select" id="languages" name="languages[]" multiple>
            <?php
            $allLanguages = ["Afrikaans","Arabic","Bosnia","Bulgarian","Chinese","Croatian","Danish","English","Dutch","Finnish","Faroese","Franch","German","Hindi","Magyar","Icelandie","Italian","Japanese","Greek","Greenlandic","Korean","Macedonian","Malaysian","Norwegain","Persian/Farsi","Polish","Portuguese","Ruwssian","Serbian","Spanish","Swedish","Thai","turkish","Urdu","Vietnamese"];
            foreach ($allLanguages as $lang) {
                $selected = in_array($lang, $languages) ? 'selected' : '';
                echo "<option value=\"$lang\" $selected>$lang</option>";
            }
            ?>
        </select>
    </div>

    <!-- Weight -->
    <div class="col-md-3">
        <label for="weight" class="form-label">Weight (KG)</label>
        <input type="number" class="form-control" id="weight" name="weight" min="1" value="<?= $weight ?>" required>
    </div>

    <!-- Height -->
    <div class="col-md-3">
        <label for="height" class="form-label">Height (CM)</label>
        <input type="number" class="form-control" id="height" name="height" min="1" value="<?= $height ?>" required>
    </div>

    <!-- Hair Color -->
    <div class="col-md-6">
        <label for="hairColor" class="form-label">Hair Color</label>
        <select class="form-select" id="hairColor" name="hairColor">
            <?php
            $hairColors = ["White","Platinum","Blond","Dark Blonde","Brown","Dark Brown","Black","Red","Redblind","Grey","Other"];
            foreach ($hairColors as $hc) {
                $selected = $hairColor == $hc ? 'selected' : '';
                echo "<option value=\"$hc\" $selected>$hc</option>";
            }
            ?>
        </select>
    </div>

    <!-- Eye Color -->
    <div class="col-md-6">
        <label for="eyeColor" class="form-label">Eye Color</label>
        <select class="form-select" id="eyeColor" name="eyeColor">
            <?php
            $eyeColors = ["Blue","Blue/Grey","Grey","Green","Green/Grey","Brown","Brown/Green","Dark Brown","Light Brown","Other"];
            foreach ($eyeColors as $ec) {
                $selected = $eyeColor == $ec ? 'selected' : '';
                echo "<option value=\"$ec\" $selected>$ec</option>";
            }
            ?>
        </select>
    </div>

    <!-- Education -->
    <div class="col-md-12">
        <label for="education" class="form-label">Education/Courses/Experience</label>
        <textarea class="form-control" id="education" name="education"><?= htmlspecialchars($education) ?></textarea>
    </div>

    <!-- Other Skills -->
    <div class="col-md-12">
        <label for="otherSkills" class="form-label">Other Skills/Qualifications</label>
        <textarea class="form-control" id="otherSkills" name="otherSkills"><?= htmlspecialchars($otherSkills) ?></textarea>
    </div>

    <!-- Social Links -->
    <div class="col-md-4">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="url" class="form-control" id="instagram" name="instagram" value="<?= htmlspecialchars($instagram) ?>">
    </div>
    <div class="col-md-4">
        <label for="youtube" class="form-label">YouTube URL</label>
        <input type="url" class="form-control" id="youtube" name="youtube" value="<?= htmlspecialchars($youtube) ?>">
    </div>
    <div class="col-md-4">
        <label for="vimeo" class="form-label">Vimeo URL</label>
        <input type="url" class="form-control" id="vimeo" name="vimeo" value="<?= htmlspecialchars($vimeo) ?>">
    </div>

    <!-- Profile Image -->
    <div class="col-md-6">
        <label for="profileImage" class="form-label">Upload Profile Image</label>
        <input type="file" class="form-control" id="profileImage" name="profileImage" accept="image/*">
        <?php if(!empty($profileImage)): ?>
            <img id="imagePreview" src="<?= $profileImage ?>" alt="Image Preview" style="max-width:150px; margin-top:10px;">
        <?php endif; ?>
    </div>

    <!-- Privacy Policy -->
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="privacy_policy" name="privacy_policy" value="1" <?= $privacy_policy ? 'checked' : '' ?>>
            <label class="form-check-label" for="privacy_policy">I agree to the Privacy Policy</label>
        </div>
    </div>

    <!-- Submit -->
    <div class="col-12 mt-4">
        <button type="submit" name="btn_save_updates" class="btn btn-primary">Update</button>
        <a href="profile.php" class="btn btn-secondary">Cancel</a>
    </div>
</form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require_once 'footer1.php'; ?>
</body>
</html>


  <?php require_once 'footer1.php'; ?>