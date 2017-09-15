<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/regions/header/index.php'; ?>
<div style="margin: auto; max-width: 90%;">
  <h1>Welcome to the Umami Styleguide</h1>

  <p>This page sets out the basic HTML elements that are available within the theme. To see these in action, you can click on any of the menu links above (once we complete them!).</p>

  <h2>Headings</h2>

  <h1 contenteditable="true">This is a Heading 1, you can edit it</h1>
  <p contenteditable="true">
    This is a paragraph of text below and Heading 1. You can edit this as well, if you wish. Etiam porta sem malesuada magna mollis euismod.
  </p>
  <h2 contenteditable="true">This is a Heading 2, you can edit it</h2>
    <p contenteditable="true">
      This is a paragraph of text below and Heading 2. You can edit this as well, if you wish. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
  </p>
  <h3 contenteditable="true">This is a Heading 3, you can edit it</h3>
    <p contenteditable="true">
      This is a paragraph of text below and Heading 3. You can edit this as well, if you wish.
  </p>
  <h4 contenteditable="true">This is a Heading 4, you can edit it</h4>
    <p contenteditable="true">
      This is a paragraph of text below and Heading 4. You can edit this as well, if you wish.
  </p>
  <h5 contenteditable="true">This is a Heading 5, you can edit it</h5>
    <p contenteditable="true">
      This is a paragraph of text below and Heading 5. You can edit this as well, if you wish.
  </p>
  <h6 contenteditable="true">This is a Heading 6, you can edit it</h6>
    <p contenteditable="true">
      This is a paragraph of text below and Heading 6. You can edit this as well, if you wish.
  </p>

  <h2>Block Level Elements</h2>

  <h3>Paragraph</h3>
  <p contenteditable="true">This is a paragraph of text. Feel free to click in here to add your own. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

  <h3>Blockquote</h3>
  <blockquote contenteditable="true">This is a blockquote. You know, one of those nice statements that someone made in the text that deserves to stand on its own.</blockquote>

  <h3>Lists - Ordered List</h3>
  <ol>
    <li contenteditable="true">Mollis Egestas Nibh</li>
    <li contenteditable="true">Mollis Egestas Nibh</li>
    <li contenteditable="true">Mollis Egestas Nibh</li>
      <ol>
        <li contenteditable="true">Sub-item Mollis Egestas Nibh</li>
        <li contenteditable="true">Sub-item Mollis Egestas Nibh</li>
        <li contenteditable="true">Sub-item Mollis Egestas Nibh</li>
      </ol>
    <li contenteditable="true">Mollis Egestas Nibh</li>
    <li contenteditable="true">Mollis Egestas Nibh</li>
  </ol>

  <h3>Lists - Unordered List</h3>
  <ul>
    <li contenteditable="true">Mollis Egestas Nibh</li>
    <li contenteditable="true">Mollis Egestas Nibh</li>
    <li contenteditable="true">Mollis Egestas Nibh</li>
      <ol>
        <li contenteditable="true">Sub-item Mollis Egestas Nibh</li>
        <li contenteditable="true">Sub-item Mollis Egestas Nibh</li>
        <li contenteditable="true">Sub-item Mollis Egestas Nibh</li>
      </ol>
    <li contenteditable="true">Mollis Egestas Nibh</li>
    <li contenteditable="true">Mollis Egestas Nibh</li>
  </ul>

  <h3>Form Elements</h3>

  <!--
        This form is adapted from the one on CSS Tricks
        - https://css-tricks.com/snippets/html/example-form-markup/
  -->

  <form id="myForm" action="#" method="post">

    <div>
      <label for="name" contenteditable="true">Text Input:</label>
      <input type="text" name="name" id="name" value="" tabindex="1">
    </div>

    <div>
      <h4>Radio Button Choice</h4>

      <label for="radio-choice-1" contenteditable="true">Choice 1</label>
      <input type="radio" name="radio-choice" id="radio-choice-1" tabindex="2" value="choice-1">

      <label for="radio-choice-2" contenteditable="true">Choice 2</label>
      <input type="radio" name="radio-choice" id="radio-choice-2" tabindex="3" value="choice-2">

      <label for="radio-choice-3" contenteditable="true">Choice 3</label>
      <input type="radio" name="radio-choice" id="radio-choice-3" tabindex="4" value="choice-3">
    </div>

    <div>
      <label for="select-choice" contenteditable="true">Select Dropdown Choice:</label>
      <select name="select-choice" id="select-choice">
        <option value="Choice 1">Choice 1</option>
        <option value="Choice 2">Choice 2</option>
        <option value="Choice 3">Choice 3</option>
      </select>
    </div>

    <div>
      <label for="textarea">Textarea:</label>
      <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
    </div>

    <div>
      <label for="checkbox" contenteditable="true">Checkbox:</label>
      <input type="checkbox" name="checkbox">
    </div>

    <div>
      <input type="submit" value="Submit">
    </div>
  </form>

  <h2>Inline Level Elements</h2>
  <h3>Links in text</h3>
  <p contenteditable="true">This is a paragraph of this, and <a href="#">this is a link within it</p>
</div>
