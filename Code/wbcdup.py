import keras
from keras.models import load_model
from keras.preprocessing import image
from PIL import Image
import numpy as np
import os

def get_model():
  global model
  model = load_model('deeps_wbc1.h5')
  print("Model Loaded!")
get_model()


img_width,img_height=60,80
images=[]
for filename in os.listdir("bloodsmear"):
  imagepath= "bloodsmear/" + filename
  img=image.load_img(imagepath,target_size=(img_width,img_height))
  x=image.img_to_array(img)
  x=np.expand_dims(x,axis=0)
  input_image=np.vstack([x])
  images.append(input_image)
  
for i in images:
  classes=model.predict_classes(i,batch_size=10)
  if 1 in classes:
    print('Neutrophil')
  elif 2 in classes:
    print('Eosinophil')
  elif 3 in classes:
    print('Monocyte')
  else:
    print('Lymphocyte')