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
            data['name'] = rows[1]
            data['role'] = rows[2]
            data['email'] = rows[3]
            data['whatsapp'] = rows[4]
            data['fb'] = rows[5]
            data['instagram'] = rows[6]
            data['linkedin'] = rows[7]
            data['image'] = 'team_2021_images/PG/' + rows[1] + '.jpg'

            ls.append(data)

  
    # Open a json writer, and use the json.dumps()  
    # function to dump data 
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf: 
        jsonf.write(json.dumps(ls, indent=4)) 
          
# Driver Code 
  
# Decide the two file paths according to your  
# computer system 
csvFilePath = r'PG_Team_2021.csv'
jsonFilePath = r'swc_pg_team_2021.json'
  
# Call the make_json function 
make_json(csvFilePath, jsonFilePath)