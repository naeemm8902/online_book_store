<style>
    /* Style the search container */
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 6vh;
  }
    .search {
      display: flex;
      width: 100%;
    }

    /* Style the select dropdown */
    .search .a {
        flex: 1;
    }

    .search .a select {
        /* width: 100%; */
        padding: 10px;
        /* border-radius: 5px; */
        align-items: center;
        justify-content: center;
        border: 1px solid #ccc;
        font-size: 16px;
        outline: none;
    }

    /* Style the input box */
    .search .b {
        flex: 3;
    }

    .search .b input[type="text"] {
        width: 100%;
        padding: 10px;
        /* border-radius: 5px; */
        border: 1px solid #ccc;
        font-size: 16px;
        outline: none;
    }

    /* Style the search button */
    .search .c {
        flex: 1; 
    }

    .search .c .search-bttn {
        padding: 5px;
        border: none;
        background: #007bff;
        color: white;
        border-radius: 0 25px 4px 0;
        cursor: pointer;
        font-size: 14px;
    }

    /* Hover effect for the search button */
    .search .c .search-bttn:hover {
        background: #0056b3;
    }
    @media (max-width: 768px) {
        .search {
            flex-direction: column; /* Stack elements vertically */
        }

        .search .a select,
        .search .b input[type="text"],
        .search .c .search-bttn {
            display: none;
        }
    }
</style>

<div class="container">
  <div class="search">
      <div class="a">
          <select name="" id="">
              <option value="">all</option>
              <option value="">book2</option>
              <option value="">book3</option>
          </select>
      </div>
      <div class="b">
          <input type="text" placeholder="Search...">
      </div>
      <div class="c">
          <button type="submit" class="search-bttn"><i class="fa fa-search"></i> Search</button>
      </div>
  </div>
</div>
