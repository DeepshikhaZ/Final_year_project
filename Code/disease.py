from keras.models import load_model, Sequential
import numpy as np
import sys

def get_model():
	global model
	model = load_model('model_disease_prediction6.h5')
get_model()
age = sys.argv[1];
gender = sys.argv[2];
lym = sys.argv[3];
neu = sys.argv[4];
eso = sys.argv[5];
mon = sys.argv[6];
x = np.array([[age,gender,lym,neu,mon,eso]])
y = model.predict(x)
ans = np.argmax(y,axis=1)
prediction = ans.tolist()
print(prediction[0])
