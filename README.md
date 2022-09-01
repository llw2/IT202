# IT202 AFS Setup
- 9/2/2022 set up structures for using AFS public_html directly
- Profile is not used but is a placeholder for Heroku how to deploy
- public_html contains all public facing content
- partials will be templates/partial pages that will NOT be accessed directly (still can reference via code)
- lib will be custom functions/libraries/etc that will NOT be accessed directly (still can be referenced via code)
- All work will be subfolders inside public_html (for the most part), lib will contain reusable functionality, partials will contain reusable templates, nothing else should change.
