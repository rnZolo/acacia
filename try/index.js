
    let btn = document.querySelector('.click');
    btn.addEventListener('click', function(){

        toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
        toastr.options.closeMethod = 'slideUp';
        toastr.options.showEasing = 'easeOutBounce';
        toastr.options.closeButton = true;
        toastr.options.closeDuration = 300;
        toastr.options.closeEasing = 'swing';
    })
    // Display an info toast with no title// Display a warning toast, with no title


// Display a success toast, with a title
toastr.success('Have fun storming the castle!', 'Miracle Max Says');

// Display an error toast, with a title
toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');

// // Immediately remove current toasts without using animation
// toastr.remove();

// // Remove current toasts using animation
// toastr.clear();

// Override global options
toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000});


