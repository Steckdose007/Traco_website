import sys
import os
import numpy as np
import pandas as pd
import subprocess
import scipy

if __name__ == "__main__":
    #subprocess.call([sys.executable, "-m", "pip", "install", "scipy"])
    # Check if two command-line arguments are provided
    if len(sys.argv) != 3:
        print("-1000000000")
        sys.exit(1)

    # Get file paths from command-line arguments
    path_to_file1 = sys.argv[1]
    path_to_file2 = sys.argv[2]

    # Check if files exist
    if not (os.path.exists(path_to_file1) and os.path.exists(path_to_file2)):
        print("1")
        sys.exit(1)
    else:
        print("6")

 

    