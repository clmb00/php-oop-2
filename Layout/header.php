<body>
  <header class="p-4 bg-primary bg-gradient text-white d-flex justify-content-between align-items-center">
    <h1 class="fw-bold fs-1">Pet Shop</h1>
    <form action="" class="d-flex">
      <h4 class="mx-4">Filter By:</h4>
      <label for="dog" class="mx-2"><img style="width: 30px;" src="./Img/dog.png" alt="Dog"></label>
      <input type="checkbox" name="Dogs" id="dog" value="true" checked/>
      <label for="cat" class="mx-2"><img style="width: 30px;" src="./Img/cat.png" alt="Cat"></label>
      <input type="checkbox" name="Cats" id="cat" value="true" checked/>
      <label for="fish" class="mx-2"><img style="width: 30px;" src="./Img/clown-fish.png" alt="Fish"></label>
      <input type="checkbox" name="Fish" id="Fish" value="true" checked/>
      <button type="submit" class="btn btn-light ms-4">Filter!</button>
    </form>
  </header>