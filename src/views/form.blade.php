<!-- resources/views/contactform/form.blade.php -->
<form action="{{ url('contact') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit">Submit</button>
</form>
