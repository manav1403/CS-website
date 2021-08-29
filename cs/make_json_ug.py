import csv 
import json 
  
# Function to convert a CSV to JSON 
# Takes the file paths as arguments 
def make_json(csvFilePath, jsonFilePath): 
      
    # create a dictionary 
    
    ls=[] 
    # Open a csv reader called DictReader 
    with open(csvFilePath, 'r', encoding='utf-8',) as csvf: 
        csvReader = csv.reader(csvf) 
          
        # Convert each row into a dictionary  
        # and add it to data 
        for rows in csvReader: 
            data = {} 
            data['name'] = rows[0]
            data['email'] = rows[1]
            data['roll'] = rows[2]
            data['about'] = rows[3]
            data['place'] = rows[4]
            data['branch'] = rows[5]
            data['image'] = 'team_2021_images/UG/' + rows[2]
            data['whatsapp'] = rows[7]
            data['fb'] = rows[8]
            data['instagram'] = rows[9]
            data['linkedin'] = rows[10]

            ls.append(data)
            # Assuming a column named 'No' to 
            # be the primary key 

  
    # Open a json writer, and use the json.dumps()  
    # function to dump data 
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf: 
        jsonf.write(json.dumps(ls, indent=4)) 
          
# Driver Code 
  
# Decide the two file paths according to your  
# computer system 
csvFilePath = r'UG_Team_2021.csv'
jsonFilePath = r'swc_ug_team_2021.json'
  
# Call the make_json function 
make_json(csvFilePath, jsonFilePath)