<?php
  include('insert.php');
?>
<div class="col-lg-4 text-light rounded mt-1 h-50" id="form-container">
    <form action="includes/insert.php" method="post" enctype="multipart/form-data">
        <h2 class="p-3">Add New Movie</h2>
        <!-- echo if session exist -->
        <?php
           if(isset($_SESSION['error'])) {
             echo $_SESSION['error'];
             unset($_SESSION['error']);
           }
        ?>
        <div class="row h6">
            <div class="col-1">
                <label for="title">Title:</label>
            </div>
            <div class="col ml-4">
                <input type="text" name="title" id="title" class="w-75 p-1 ml-2 rounded border-0" required>
            </div>
        </div>
        <div class="row h6">
            <div class="col-1">
                <label for="director">Director: </label>
            </div>
            <div class="col ml-4">
                <input type="text" name="director" id="director" class="w-75 p-1 ml-2 rounded border-0" required>
            </div>
        </div>
        <div class="row h6">
            <div class="col-1">
                <label for="genre">Genre:</label>
            </div>
            <div class="col ml-4">
                <input type="text" name="genre" id="genre" class="w-75 p-1 ml-2 rounded border-0" required>
            </div>
        </div>
        <div class="row h6">
            <div class="col-1">
                <label for="release">Release:</label>
            </div>
            <div class="col ml-4">
                <input type="text" name="release" id="release" class="w-75 p-1 ml-2 rounded border-0" required>
            </div>
        </div>
        <div class="row h6">
            <div class="col-1">
                <label for="stars">Stars:</label>
            </div>
            <div class="col ml-4">
                <input type="text" name="stars" id="stars" class="w-75 p-1 ml-2 rounded border-0" required>
            </div>
        </div>
        <div class="row h6">
            <div class="col-1">
                <label for="plot">Plot:</label>
            </div>
            <div class="col ml-4">
                <textarea name="plot" id="plot" cols="30" rows="10" class="w-75 p-1 ml-2 rounded border-0" required></textarea>
            </div>
        </div>
        <div class="row h6">
            <div class="col-1">
                <label for="upload">Upload:</label>
            </div>
            <div class="col ml-4">
                <input type="file" name="upload" id="upload" class="w-75 p-1 ml-2 rounded border-0" required>
            </div>
        </div>
        <div class="text-right">
            <button class="btn mb-3 mr-4 btn-success " name="insert"><i class="fas fa-plus pr-2"></i>Add Movie</button>
        </div>
    </form>
</div>