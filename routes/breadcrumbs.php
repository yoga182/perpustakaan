<?php   
// home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Home', route('admin.dashboard'));
});
//author index
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Author', route('admin.author.index'));
});

//add author
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Author', route('admin.author.index'));
    $trail->push('Add Author', route('admin.author.create'));
});

//edit author
Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Author', route('admin.author.index'));
    $trail->push('Edit Author', route('admin.author.edit', $author));
});


//Book index
Breadcrumbs::for('admin.book.index', function ($trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Books', route('admin.book.index'));
});

//add books
Breadcrumbs::for('admin.book.create', function ($trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Books', route('admin.book.index'));
    $trail->push('Add Book', route('admin.book.create'));
});

//edit book
Breadcrumbs::for('admin.book.edit', function ($trail, $book) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Books', route('admin.book.index'));
    $trail->push('Edit Book', route('admin.book.edit', $book));
});

//borrow index
Breadcrumbs::for('admin.borrow.index', function ($trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Borrow', route('admin.borrow.index'));
});