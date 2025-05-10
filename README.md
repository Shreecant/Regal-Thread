✅ Step 1: Prerequisites
Make sure you have the following installed:

Python 3.8+ (you’re using 3.12 — perfect)

Install the required libraries:

bash
Copy
Edit
pip install flask opencv-python pygame imutils scipy dlib
✅ Also install CMake and Visual Studio Build Tools if dlib doesn’t install correctly.

✅ Step 2: Project Structure
Ensure your directory is structured like this:

pgsql
Copy
Edit
Drowsiness-Detection-System-main/
│
├── drowsiness.py
├── music.wav
├── models/
│   └── shape_predictor_68_face_landmarks.dat
└── templates/
    └── index.html
🔺 If index.html is missing, Flask will crash. Create a basic file like this:

html
Copy
Edit
<!-- templates/index.html -->
<html>
  <body>
    <h1>Drowsiness Detection System</h1>
    <img src="{{ url_for('video_feed') }}">
  </body>
</html>
✅ Step 3: Verify Model File
Make sure this file exists:

bash
Copy
Edit
models/shape_predictor_68_face_landmarks.dat
If not, download it from here:

➡️ http://dlib.net/files/shape_predictor_68_face_landmarks.dat.bz2

Unzip it and place it in the models/ folder.

✅ Step 4: Run the App
In your terminal or PowerShell:

bash
Copy
Edit
python drowsiness.py
You should see:

nginx
Copy
Edit
Running on http://127.0.0.1:5000
✅ Step 5: Use the Web Interface
Open a browser.

Visit: http://127.0.0.1:5000

It should:

Open webcam.

Start streaming.

Draw eyes.

Sound an alert if drowsiness is detected.

✅ Step 6: Troubleshooting Tips
No video? Webcam may be in use or not connected.

No alert sound? Check if music.wav exists and is a valid .wav file.

Crashes on start?

Check shape_predictor_68_face_landmarks.dat path.

Confirm that index.html is present in templates/.
