git clone https://github.com/imartinez/privateGPT && cd privateGPT && \
python3.11 -m venv .venv && source .venv/bin/activate && \
pip install --upgrade pip poetry && poetry install --with ui,local && ./scripts/setup

# Launch the privateGPT API server **and** the gradio UI
poetry run python3.11 -m private_gpt

# In another terminal, create a new browser window on your private GPT!
open http://127.0.0.1:8001/