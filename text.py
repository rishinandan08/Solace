import pandas as pd

f=open("inputtext.txt", "r")
f1 = (f.read()).split(' ')

from sklearn.feature_extraction.text import CountVectorizer
count_vector = CountVectorizer(f1)
# print(count_vector)
#count_vector.fit(documents)
#count_vector.get_feature_names()
#count_vector = CountVectorizer(analyzer=lambda x: x)

count_vector.fit(f1)
count_vector.get_feature_names()

doc_array = count_vector.transform(f1).toarray()
frequency_matrix = pd.DataFrame(doc_array,index=f1,columns=count_vector.get_feature_names())

# converting the positive txt file to array
def file_to_list(file):
    rtn: object = []
    file_object: object = open(file, "r")
    rtn: object = file_object.read().splitlines()
    file_object.close()
    return list(filter(None, pd.unique(rtn).tolist())) # Remove Empty/Duplicates Values
    pass

positive_array: object = file_to_list('positive.txt')
# print(positive_array)

# converting the negative txt file to array
def file_to_list(file):
    rtn: object = []
    file_object: object = open(file, "r")
    rtn: object = file_object.read().splitlines()
    file_object.close()
    return list(filter(None, pd.unique(rtn).tolist())) # Remove Empty/Duplicates Values
    pass

negative_array: object = file_to_list('negative.txt')
# print(negative_array)

p=0
n=0
for i in frequency_matrix:
   if i in positive_array:
       p=p+1
# print(p)
for i in frequency_matrix:
    if i in negative_array:
       n=n+1
# print(n)
output2 = " "
if p > n :
    output2 = "It looks like you're a very positive person in life and that you carry or prioritize things and people exactly the way you should. Most importantly the nature you perceive and how you manage situations around you keeping in mind about your past and comparing it efficiently with your present totally defines a fine future. \n You're perfect the way you are!"
    print("on a whole it seems like you are a positive person by nature.")
elif p < n :
    output2 = "Oops, looks like negative factors are at peak and you're quite uncertain about yourself and your surroundings. \n Don't worry you're not alone and we are here for you!"
    print("looks like you have a little bit of negativity in you. Don't worry we shall overcome!")
else:
    output2 = "OK! Seems like you're neither too positive nor too negative with your life and your surroundings. Your mentality is more like 'just go with the flow'. Your emotions can very anytime and so your answers may not be stable. At situations it is good to have a neutral behavior but not always.\n Just a little molding required.\n Don't worry, you are worthy and deserving just like the others!"
    print("you seemed to be a balanced in nature.")

out = open("output2.txt", "w")
out.write(output2)
out.close()
