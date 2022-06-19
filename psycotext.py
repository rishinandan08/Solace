import pandas as pd
from sklearn.feature_extraction.text import CountVectorizer

f2=open("inputpysco2.txt", "r")
f21 = (f2.readline()).split(' ')
count_vector2 = CountVectorizer(f21)
count_vector2.fit(f21)
count_vector2.get_feature_names()
doc_array2 = count_vector2.transform(f21).toarray()
frequency_matrix2 = pd.DataFrame(doc_array2,index=f21,columns=count_vector2.get_feature_names())

f4=open("inputpysco4.txt", "r")
f41 = (f4.readline()).split(' ')
count_vector4 = CountVectorizer(f41)
count_vector4.fit(f41)
count_vector4.get_feature_names()
doc_array4 = count_vector4.transform(f41).toarray()
frequency_matrix4 = pd.DataFrame(doc_array4,index=f41,columns=count_vector4.get_feature_names())

f5=open("inputpysco5.txt", "r")
f51 = (f5.readline()).split(' ')
count_vector5 = CountVectorizer(f51)
count_vector5.fit(f51)
count_vector5.get_feature_names()
doc_array5 = count_vector5.transform(f51).toarray()
frequency_matrix5 = pd.DataFrame(doc_array5,index=f51,columns=count_vector5.get_feature_names())

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

p2=0
n2=0
for i in frequency_matrix2:
   if i in positive_array:
       p2=p2+1
for i in frequency_matrix2:
    if i in negative_array:
       n2=n2+1

p4=0
n4=0
for i in frequency_matrix4:
   if i in positive_array:
       p4=p4+1
for i in frequency_matrix4:
    if i in negative_array:
       n4=n4+1

p5=0
n5=0
for i in frequency_matrix5:
   if i in positive_array:
       p5=p5+1
for i in frequency_matrix5:
    if i in negative_array:
       n5=n5+1

pyscooutput2 = " "
if p2 > n2 :
    pyscooutput2 = "2"
elif p2 < n2 :
    pyscooutput2 = "1"
else:
    pyscooutput2 = "0"

pyscooutput4 = " "
if p4 > n4 :
    pyscooutput4 = "2"
elif p4 < n4 :
    pyscooutput4 = "1"
else:
    pyscooutput4 = "0"

pyscooutput5 = " "
if p5 > n5 :
    pyscooutput5 = "2"
elif p5 < n5 :
    pyscooutput5 = "1"
else:
    pyscooutput5 = "0"

out = open("psycotextoutput.txt", "w")
out.write(pyscooutput2)
out.write("\n")
out.write(pyscooutput4)
out.write("\n")
out.write(pyscooutput5)
out.close()
