<!DOCTYPE html>
<html lang="fr">
<?php $title = "Rajouter nouvelle création";
$site_description = "Venez rajouter votre nouvelle création";
require "../head.php"; ?>

<body>
    <style>
        .ql-container.ql-snow.-error {
            border: solid red;
        }
    </style>
    <?php require "../header.php"; ?>

    <div class="container">
        <h1>Nouvelle création</h1>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>
                    Nom
                    <input class="form-control" type="text" name="title" placeholder="Title" maxlength="50" value="<?= isset($article) ? $_POST['title'] : '' ?>" />
                </label>
                <?php if (isset($validations) && isset($validations['title'])) : ?>
                    <p><?= $validations['title'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Créateur
                    <input class="form-control" type="text" name="creator" placeholder="Creator" maxlength="50" value="<?= isset($article) ? $_POST['creator'] : '' ?>" />
                </label>
                <?php if (isset($validations) && isset($validations['creator'])) : ?>
                    <p><?= $validations['creator'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Description
                    <!-- <textarea
                        class="form-control"
                        name="description"
                        maxlength="1000"><?= isset($article) ? $_POST['description'] : '' ?></textarea> -->
                    <div id="editor"></div>
                    <input type="hidden" name="description" />
                </label>
                <?php if (isset($validations) && isset($validations['description'])) : ?>
                    <p><?= $validations['description'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Prix
                    <input class="form-control" type="text" name="price" placeholder="Price" maxlength="50" value="<?= isset($article) ? $_POST['price'] : '' ?>" />
                </label>
                <?php if (isset($validations) && isset($validations['price'])) : ?>
                    <p><?= $validations['price'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Stock
                    <input class="form-control" type="int" name="stock" placeholder="Stock" maxlength="50" value="<?= isset($article) ? $_POST['stock'] : '' ?>" />
                </label>
                <?php if (isset($validations) && isset($validations['stock'])) : ?>
                    <p><?= $validations['stock'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>
                    Image
                    <input class="form-control" type="file" name="image" accept="image/*" />
                </label>
            </div>

            <input type="submit" value="Save" class="btn btn-primary" />

        </form>
    </div>

    <?php require "../footer.php"; ?>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Description du t-shirt !',
            modules: {
                toolbar: [
                    [{
                        'header': [2, 3, 4, false]
                    }],
                    ['bold', 'italic'],
                    ['video'],
                    ['clean']
                ]
            }
        });
        var form = document.querySelector('form');
        form.onsubmit = function(e) {
            var contentInput = document.querySelector('input[name=content]');
            var contentToSave = quill.getContents();
            if (contentToSave.ops.length === 1 && Object.keys(contentToSave.ops[0]).length === 1 && contentToSave.ops[0].insert.trim().length === 0) {
                document.querySelector('#editor').className = 'ql-container ql-snow -error';
                return false;
            } else {
                contentInput.value = JSON.stringify(contentToSave);
                document.querySelector('#editor').className = 'ql-container ql-snow';
                return true;
            }
        };
    </script>
</body>

</html>