import os
from keras.models import load_model
from keras.preprocessing import image
import numpy as np
import tensorflow as tf

dir_path = os.path.dirname(os.path.realpath(__file__))

graph = tf.get_default_graph()
with graph.as_default():
	model = load_model('deeps_wbc_final1.h5')

img_width,img_height=60,80
images=[]
indices = {1: 'Eosinophil', 2: 'Neutrophil', 3: 'Monocyte', 4: 'Lymphocyte'}
for filename in os.listdir("bloodsmear"):
	imagepath= "bloodsmear/" + filename
	data = image.load_img(imagepath, target_size=(60, 80, 3))
	data = np.expand_dims(data, axis=0)
	data = data * 1.0 / 255
	with graph.as_default():
		predicted = model.predict(data)
		predicted_class = np.asscalar(np.argmax(predicted, axis=1))
		label = indices[predicted_class]
		print(label)


