<!DOCTYPE html>
<html lang="en">

<!-- header includes -->
<?php include('includes/head.php') ?>

<body>
    <div class="text-center rounded" id="header">
        <h1 class="p-3">My Movie Library</h1>
    </div>

    <!-- search field -->
    <div class="container">
        <label for="search" class="h5" id="search-title">Search for Movies</label>
        <input type="text" name="search" id="search" class="p-1 w-sm-100 rounded form-control" placeholder="Search for Title, Director, Genre, or Stars">
    </div>

    <div class="container-fluid p-5">
        <div class="row">
            <!-- table includes -->
            <?php include('includes/table.php') ?>
            <!-- form includes -->
            <?php include('includes/form.php') ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js" integrity="sha512-vyRAVI0IEm6LI/fVSv/Wq/d0KUfrg3hJq2Qz5FlfER69sf3ZHlOrsLriNm49FxnpUGmhx+TaJKwJ+ByTLKT+Yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="includes/search.js"></script>
</body>

</html>