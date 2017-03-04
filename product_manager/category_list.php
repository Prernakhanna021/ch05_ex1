<?php include '../view/header.php'; ?>
<main>
  <h1>Category List</h1>
  <table>
      <tr>
          <th>Name</th>
          <th>&nbsp;</th>
      </tr>

      <?php foreach ($categories as $category) : ?>
      <tr>
          <td><?php echo $category['categoryName']; ?></td>
          <td><form action="index.php?action=delete_category" method="post">
              <input type="hidden" name="category_id"
                     value="<?php echo $category['categoryID']; ?>">
              <input type="submit" value="Delete">
          </form></td>
      </tr>
      </tr>
      <?php endforeach; ?>
  </table>

    <h2>Add Category</h2>
    <form action="index.php?action=add_category" method="post" id="add_category_form">
          <label>Name:</label>
          <input type="text" name="categoryName"><br>
          <input type="submit" value="Add Category"><br>
      </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
