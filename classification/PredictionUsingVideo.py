from imageai.Detection.Custom import CustomVideoObjectDetection 
import os
import cv2
from matplotlib import pyplot as plt

execution_path = os.getcwd()

camera = cv2.VideoCapture(0)
 
    
detector = CustomVideoObjectDetection()
detector.setModelTypeAsYOLOv3()
detector.setModelPath(os.path.join(execution_path , r"C:\Users\This\Downloads\Copy of detection_model-ex-010--loss-0007.627.h5"))
detector.setJsonPath(r"C:\Users\This\Downloads\Copy of detection_config.json")
detector.loadModel()

video_path = detector.detectObjectsFromVideo(camera_input=camera,
      output_file_path=os.path.join(execution_path, "camera_detected_video")
    , frames_per_second=30, log_progress=True, minimum_percentage_probability=40, return_detected_frame=True, detection_timeout=120)

