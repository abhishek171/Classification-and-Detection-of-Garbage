from imageai.Detection.Custom import CustomObjectDetection

detector = CustomObjectDetection()
detector.setModelTypeAsYOLOv3()
detector.setModelPath(r"C:\Users\This\Downloads\Copy of detection_model-ex-010--loss-0007.627.h5") 
detector.setJsonPath(r"C:\Users\This\Downloads\Copy of detection_config.json")
detector.loadModel()
detections = detector.detectObjectsFromImage(input_image=r"C:\Users\This\Desktop\garbage\train\images\glass121.jpg", output_image_path="yolo3-detected.jpg")
for detection in detections:
    print(detection["name"], " : ", detection["percentage_probability"], " : ", detection["box_points"])
a=detection["name"]
print(a)
