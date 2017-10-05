import csv    

def mark_answers(row, mc_answers, fr_answers):
    '''
    Preconditions:
    A row in the CSV file has 6 miscellaneous columns then it has 15 multiple choice
    answer columns, and 3 free response answer columns.
    
    mc_answers has a length of 15.
    
    fr_answers has a length of 3.
    '''
    
    useless_columns = 6
    mc_columns = 15
    fr_columns = 3
    mc_start_index = useless_columns #Inclusive
    mc_end_index = mc_start_index+mc_columns #Exclusive
    fr_start_index = mc_end_index #Inclusive
    fr_end_index = mc_end_index + fr_columns #Exclusive
    
    # Strip is used when comparing with the right answer since next line characters (\n) are
    # not removed when the right answers are loaded.
    right_mc_answers = 0
    for i in range ( mc_start_index, mc_end_index ):
        right_mc_answers += int(row[i-mc_start_index].strip() == mc_answers[i-mc_start_index].strip())
    
    right_fr_answers = 0
    for i in range ( fr_start_index, fr_end_index ):
        right_fr_answers += int(row[i-fr_start_index].strip() == fr_answers[i-fr_start_index].strip())
    
    return right_mc_answers + right_fr_answers

if __name__ == "__main__":
    # Load the correct answers from a text file so this code can be committed to
    # github without leaking the answers.
    with open("mc-answers.txt", "rb") as mc_answers_file:
        with open("fr-answers.txt", "rb") as fr_answers_file:
            mc_answers = mc_answers_file.readlines()
            fr_answers = fr_answers_file.readlines()
            
            # The name of the file to mark is hardcoded for simplicity.
            # This could be replaced by a file chooser if portability was an issue.
            with open("to_mark.csv", "rb") as file_to_mark:
            
            
            	# Prepare to write a new file with the marks.
            	with open("marked.csv", "wb") as marked_file:
                    
                	# Read the csv_file
                	reader = csv.reader(file_to_mark, delimiter=',', quotechar='"')
                    
                	for row in reader:
                    		# Copy the student's row to the new file, and add their mark as a new column.
                            for i in range (0, len(row)):
                                if i != 0:
                                    marked_file.write(",")
                                marked_file.write('"'+row[i]+'"')
                            marked_file.write(',"'+str(mark_answers(row, mc_answers, fr_answers))+'"\n')
