
f2=open("inputpysco2.txt", "r")
f21 = (f2.read()).split(' ')
f21.pop(-1)

f3=open("inputpysco3.txt", "r")
f31 = (f3.read()).split(' ')
f31.pop(-1)

f4=open("inputpysco4.txt", "r")
f41 = (f4.read()).split(' ')
f41.pop(-1)

f5=open("inputpysco5.txt", "r")
f51 = (f5.read()).split(' ')
f51.pop(-1)

score_val2 = 0
for i in f21:
    if i == "SD":
        score_val2 = score_val2 + 1
    elif i == "D":
        score_val2 = score_val2 + 2
    elif i == "N":
        score_val2 = score_val2 + 3
    elif i == "A":
        score_val2 = score_val2 + 4
    elif i == "SA":
        score_val2 = score_val2 + 5

score_val3 = 0
for i in f31:
    if i == "AN":
        score_val3 = score_val3 + 4
    elif i == "S":
        score_val3 = score_val3 + 3
    elif i == "O":
        score_val3 = score_val3 + 2
    elif i == "AA":
        score_val3 = score_val3 + 1

score_val4 = 0
for i in f41:
    if i == "YES":
        score_val4 = score_val4 + 2
    elif i == "NO":
        score_val4 = score_val4 + 1

score_val5 = 0
for i in f51:
    if i == "YES":
        score_val5 = score_val5 + 2
    elif i == "NO":
        score_val5 = score_val5 + 1

if score_val2 <= 21 :
    sentval2 = "Looks like your personality is little on the weaker side. The observations say that you have a low self-esteem and that your confidence level keeps dropping. Self-belief is towards the negative direction and you are barely unaware of what you are doing. Developing a self-identity does not seem to be a priority to you. You are vulnerable in nature and not out spoken person. Don't worry, we can have a great talk and change this!"
    sentval2sol="Start taking up small challenges that brings confidence and build self belief with you. Always analyze the before and after of your actions. Know for a matter of fact that nothing crosses you own identity. Get to know more people around you so you will know different way of looking at life. Try it!"
elif score_val2 <= 42 :
    sentval2 = "Looks like your personality is middling. The observations say that you have an average self-esteem. You are modest and quite impulsive in nature. You neither isolate yourself nor get along with the crowd. Getting adjusted seems strenuous to you. Sometimes you get a little too distracted due to which discipline goes off track. You've a moderate self-belief that makes you doubt your own ability. Basically you neither want to go out there and have a wide exposure nor lean towards loneliness, I say confused but yet trying.Yes, try harder we are with you in this!"
    sentval2sol = "No matter who you are, where you're from, your skin color, your gender identity, just speak yourself. Find your name and find your voice by speaking yourself."
else :
    sentval2 = "Waaw! Looks like your personality is shining. The observations say that you have great self-esteem and you are highly confident in all aspects. You positively believe in yourself and know what you are up to. Goals are set and you are engrossed towards full filling it- Ambitious. You hold qualities like being friendly, helpful, Extroversion, out spoken, temperament etc. Being conscientiousness (morally correct) is a plus point. Calm, composed and an enthusiastic human being.You are perfect the way you are!"
    sentval2sol = "No matter who you are, where you're from, your skin color, your gender identity, just speak yourself. Find your name and find your voice by speaking yourself."


if score_val3 <= 12 :
    sentval3 = "The observation of the above score tells us that you have poor anger management techniques. The way you deal with certain situations aren't under control and working under pressure is never your thing. CALM is a word you lack. You are short tempered and you fail to think rational and just choose to go with the flow of your emotions. Wait! Let's just take a deep breathe."
    sentval3sol = "Patience is all you need and to achieve this you can do meditation, yoga or pranayama (simple breathing techniques) this controls the adrenaline rush in your body and keeps you calm and composed. Think twice before doing anything. Talk to someone you trust and share your problems to feel light. Lean on to activities that soothens your state of mind like music, walk,drive etc.. Try to see how it helps you!"
elif score_val3 <= 28 :
    sentval3 = "The observation of the above score tells us that the way you analyze situations is just very moderate and so is your self-control. Once in a while you make an attempt to think before taking any action. You sometimes depend on others and require constant feedback. At times you feel sensitive about the situation and try to deal with it in a better way"
    sentval3sol = "You are in good shape. Just keep it going:)"
else :
    sentval3 = "The observation of the above score tells us that you have an excellent anger management skill that allows you to deal with every situation in the right way. You have a great self-control and you think rationally before doing anything. You are self-dependent and extremely confident about your actions. The thought of changing your anger energy into humor is a step that proves that you are optimistic in nature. Great! Stay calm and keep going."
    sentval3sol = "You are in good shape. Just keep it going:)"

if score_val4 <= 5 :
    sentval4 = "The observation of the above score tells us that your family isn't open minded about certain things. Their cooperation towards your independent decision making is almost nil and at times they become controlling due to which you're bound by certain restrictions and norms that you're forced to follow. Basically you're in the egg shell."
    sentval4sol = "Take out time to sit with you family and spill tint fragments of your inner feelings to start off with. Talk to them about you daily activities to make sure they show interest and are curious to know what next. Sometimes take risk to accomplish a task that you are sure about so that the success of it will be appreciated and recognized by your family and they shall automatically support you for independent decision making. Indulge in actions that will you gain their trust! "
else :
    sentval4 = "The observation of the above score tells us that your family is extremely supportive. They allow you to take individual decisions with their suggestions and are open minded about discussing anything and everything with you. Personal growth is immensely braced and their level of acceptance and care is just so right. So let’s be the good one to build a bright future and not take advantage of it! "
    sentval4sol = "Keep it up. Make sure this bonding never breaks."

if score_val5 <= 5 :
    sentval5 = "The observation of the above score tells us that, when it comes to your career you start doubting your own capabilities. You aren't at your best interest and your focus falls to the weaker side having multiple mindsets and not determined about your choices."
    sentval5sol = "Know what exactly you want in life and set your goals tight. Talk to people and take advice from them. Believe in yourself. Have an ideal person who motivates you to reach great heights. Eliminate distraction by prioritizing what is needed most and have a firm focus. Opt for a balanced lifestyle. Good luck!"
else :
    sentval5 = "The observation of the above score tells us that, when it comes to your career you get involved to great extents to build a perfect future. Your focus towards the achievements is extraordinary and you tend to have a firm mind set on following your passion. The level of patience you attain for Self-improvement is highly appreciated. Good luck, keep going!"
    sentval5sol = "Success is not final, failure is not fatal: it is the courage to continue that counts."

score_val2 = (score_val2 * 100)/65 #Personality
score_val3 = (score_val3 * 100)/40 #Anger
score_val4 = (score_val4 * 100)/10 #Family_Relationship
score_val5 = (score_val5 * 100)/10 #Career_Assessment
from pathlib import Path

path_to_file2 = 'inputpysco2.txt'
path2 = Path(path_to_file2)

path_to_file3 = 'inputpysco3.txt'
path3 = Path(path_to_file3)

path_to_file4 = 'inputpysco4.txt'
path4 = Path(path_to_file4)

path_to_file5 = 'inputpysco5.txt'
path5 = Path(path_to_file5)

if path2.is_file():
    out = open("outputpyscoPersonality.txt", "w")
    # out.write("Personality ")
    out.write(str(score_val2))
    out.write("\n")
    out.close()

if path3.is_file():
    out = open("outputpyscoAnger.txt", "w")
    # out.write("Anger ")
    out.write(str(score_val3))
    out.write("\n")
    out.close()

if path4.is_file():
    out = open("outputpyscofamily.txt", "w")
    # out.write("Family_Relationship ")
    out.write(str(score_val4))
    out.write("\n")
    out.close()

if path5.is_file():
    out = open("outputpyscocareer.txt", "w")
    # out.write("Career_Assessment ")
    out.write(str(score_val5))
    out.write("\n")
    out.close()

Personality = open("Personality.txt", "w")
Personality.write(sentval2)
Personality.close()

Anger = open("Anger.txt", "w")
Anger.write(sentval3)
Anger.close()

Family = open("Family.txt", "w")
Family.write(sentval4)
Family.close()

Career = open("Career.txt", "w")
Career.write(sentval5)
Career.close()

Personalitysol = open("Personalitysol.txt", "w")
Personalitysol.write(sentval2sol)
Personalitysol.close()

Angersol = open("Angersol.txt", "w")
Angersol.write(sentval3sol)
Angersol.close()

Familysol = open("Familysol.txt", "w")
Familysol.write(sentval4sol)
Familysol.close()

Careersol = open("Careersol.txt", "w")
Careersol.write(sentval5sol)
Careersol.close()
