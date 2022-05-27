import pandas as pd

lst = []
print("Do you like yourself and why?")
o1 = input("enter your input: ")
print("How do you show your concern for someone who is struggling?")
o2 = input("enter your input: ")
print("How do you handle anxiety issues?")
o3 = input("enter your input: ")
print("How have you managed important things in your life?")
o4 = input("enter your input: ")
print("How do you compare your past self with present self?")
o5 = input("enter your input: ")
lst.append(o1)
lst.append(o2)
lst.append(o3)
lst.append(o4)
lst.append(o5)
# print(lst)
from sklearn.feature_extraction.text import CountVectorizer
count_vector = CountVectorizer(lst)
# print(count_vector)
#count_vector.fit(documents)
#count_vector.get_feature_names()
#count_vector = CountVectorizer(analyzer=lambda x: x)

count_vector.fit(lst)
count_vector.get_feature_names()

doc_array = count_vector.transform(lst).toarray()
frequency_matrix = pd.DataFrame(doc_array,index=lst,columns=count_vector.get_feature_names())

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

if p > n :
    print("on a whole it seems like you are a positive person by nature.")
elif p < n :
    print("looks like you have a little bit of negativity in you. Don't worry we shall overcome!")
else:
    print("you seemed to be a balanced in nature.")
