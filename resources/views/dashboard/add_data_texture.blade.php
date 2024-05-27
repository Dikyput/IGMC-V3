<form action="{{ route('add-data-texture') }}" method="POST">
    @csrf
    <div>
        <label for="texture">Texture:</label>
        <input type="number" id="texture" name="texture" required>
    </div>
    <div>
        <label for="img">Image URL:</label>
        <input type="url" id="img" name="img" required>
    </div>
    <div>
        <label for="tipe">Type:</label>
        <input type="text" id="tipe" name="tipe" required>
    </div>
    <div>
        <label for="drawable">Drawable:</label>
        <input type="number" id="drawable" name="drawable" required>
    </div>
    <button type="submit">Add Data</button>
</form>
