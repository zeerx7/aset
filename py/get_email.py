# 20/12/2020 # Coded by Pausi
import re
def get_email(source):
  #x = 'sj(ja.lanjay@gmail.com$2)'
  em = re.findall('([a-zA-Z0-9\.]+)@([a-zA-Z0-9\.]+)',source)
  tmp = []
  for x in em:                                                                              try:tmp.append(x[0]+'@'+x[1])
    except:pass
  return tmp

#example:
#print get_email('<h1>aku@gmail.com</h1><q>goo@yahoo.com</q>')
