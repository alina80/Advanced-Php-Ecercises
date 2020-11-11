<img alt="Logo" src="http://coderslab.pl/svg/logo-coderslab.svg" width="400">

#  Files in PHP

> Complete the exercises in appropriate files.

**IMPORTANT - do not change the file structure or filenames and use the prepared variables**

**Remember about type declarations**

#### Exercise 1

Create a form that allows you to upload a graphic file (sample files can be found in the `images` catalog) and saves this file in the directory selected according to the algorithm:
1. Make Hash MD5 out of the filename.
2. Based on current date, choose subdirectory; if it does not exist - create it.
3. Based on the first two characters, choose a subdirectory in that subdirectory; if it does not exist - create it.
4. Based on the two last characters, choose subdirectory in this subdirectory; if it does not exist - create it.
5. Save the file in the last subdirectory.

Example of catalog structure: ```2016-01-03/ad/4a/coderslab_image.jpg```

Create a script named ```showImage.php``` that will allow you to display that file, but not using HTML and `<img />` tag.
Ask Google how to do this differently.

#### Exercise 2

1. Create a mechanism to clean files in subdirectories from the previous exercise.
2. Files older than the specified number of seconds should be removed.
3. Try using a recursive function.
